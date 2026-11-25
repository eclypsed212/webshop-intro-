<?php


$password = "Invoker1234";

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$loginPassword = "Invoker1234";

if(password_verify($loginPassword, $hashedPassword)){
    echo "Login is succesefull!";
} else {
    echo "Incorrect password";
}