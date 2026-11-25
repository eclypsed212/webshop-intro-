<?php

/**
 * Komt van Claude met hulp van Koen. Is nodig voor ENV file uitlezen
 */
function loadEnv(string $path): void
{
    if (!is_readable($path)) {
        throw new RuntimeException(".env file not found or not readable: $path");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $line = trim($line);

        // Skip comments and lines without "="
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
            continue;
        } 

        [$key, $value] = explode('=', $line, 2);
        $key   = trim($key);
        $value = trim($value);

        // Strip surrounding quotes
        if (preg_match('/^(["\'])(.*)\1$/', $value, $m)) {
            $value = $m[2];
        }

        $_ENV[$key] = $value;
        putenv("$key=$value");
    }
}

loadEnv(__DIR__ . '/.env');


$host = "mysql_db";
$dbname = "dota_shop";
$dbUsername ="root";
$dbPassword = $_ENV["DB_PASS"];
// var_dump((bool)$password);

try {     
      $pdo = new PDO(
      "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
      $dbUsername,
      $dbPassword 
);
echo "Database connected successfully!";

}catch (PDOException $e) {
    error_log($e->getMessage());
    exit("Database connection failed!");
    
}