
<?php

$rootDir = dirname(__DIR__);

require_once $rootDir . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($rootDir);
$dotenv->safeLoad();

$jwtSecret = $_ENV['JWT_SECRET'] ?? getenv('JWT_SECRET');

if (!$jwtSecret) {
    throw new RuntimeException('JWT_SECRET is missing from environment variables.');
}

define('JWT_SECRET', $jwtSecret);
define('JWT_ISSUER', 'mini-ecommerce-api');
define('JWT_EXPIRATION', 604800);
