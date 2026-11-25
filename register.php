
<?php
require_once __DIR__ . "/database.php";
# get information from  user (email and password) || also we add filter for email/username without space 
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirmPassword = $_POST["confirm_password"] ?? "";
    
    if(password_verify($_POST['password'], $hash_uit_db)){

        echo "login ok";
    }
   
    
# check if fields is empty 
    if(empty($username) || empty($email) || empty($password) || empty($confirmPassword)){ 
        echo "Please fill all fields";
    } elseif (strlen($password) < 8){  #check if password contains of 8 characters 
        echo "Password must contain at least 8 characters!";

#check if password is the same 
    }elseif ($password !== $confirmPassword){
        echo "Passwords dont match";
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
       echo "Invalid email address!";
    
    }else {
        echo "Registration data is valid!";
        $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password)"
        
        echo "Username: " .htmlspecialchars($username);
        echo "<p>Email: " .htmlspecialchars($email) . "</p>";
        echo "<p>hashpass: " .htmlspecialchars($password_hash) . "</p>";

    }   
}

