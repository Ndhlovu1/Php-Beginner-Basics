<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=joke','joke', 'toor123');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');

}//end try
catch(PDOException $e) {
	$output = 'Unable to connect to the database.';
	$e ->getMessage();
	include 'output.html.php';
	exit();
}

$output = 'Database connection Established.';
include 'output.html.php';
$pdo = null; //ending db connection
?>

























