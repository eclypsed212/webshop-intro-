
<?php


if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"] ?? "";
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    $confirmPassword = $_POST["confirm_password"] ?? "";
    
   
    

    if(empty($username) || empty($email) || empty($password) || empty($confirmPassword)){ 
        echo "Please fill all fields";
    } elseif (strlen($password) < 8){
        echo "Password must contain at least 8 characters!";

    }elseif ($password !== $confirmPassword){
        echo "Passwords dont match";
    }else {
        echo "Registration data is valid!";
        echo "Username: " .htmlspecialchars($username);
        echo "<p>Email: " .htmlspecialchars($email) . "</p>";

    }   
    

   

    

}

