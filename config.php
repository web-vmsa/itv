<?php 
require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/itv/");
	$config['dbname'] = 'itv';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "https://itvmanaus.org/");
	$config['dbname'] = 'itvman40_itvidas';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'itvman40_root';
	$config['dbpass'] = 'jXlI7Tr$)Kk2';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOExcpetion $e) {
	echo "Erro ".$e->getMessage();
	exit;
}