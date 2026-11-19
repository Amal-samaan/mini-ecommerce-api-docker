
<?php

if (getenv('DOCKER_ENV') === 'true') {
    $host = 'db';
    $username = getenv('MARIADB_USER');
    $password = getenv('MARIADB_PASSWORD');
} else {
  
    $host = 'localhost';
    $username = 'root';
    $password = '';
}

$dbname = getenv('MARIADB_DATABASE') ?: 'mini_ecommerce';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);
    die(json_encode([
        'message' => 'Database connection failed'
    ]));
}
