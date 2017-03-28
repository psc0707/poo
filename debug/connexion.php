<?php
// Constante pour définir la configuration de la DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'nbateams');

// définition DSN
$dsn = 'mysql:dbname='.DB_DATABASE.';host='.DB_HOST.';charset=UTF8';

try {
	$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
	echo 'Connexion OK';
}
catch (Exception $e) {
	echo $e->getMessage();
}