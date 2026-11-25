<?php


$host = "mysql_db";
$dbname = "dota_shop";
$username ="root";
$password ="root";

try {
      $pdo = new PDO(
      "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
      $username,
      $password 
);
echo "Database connected successfully!";

}catch (PDOException $e) {
    echo "Database connection failed!";
}

