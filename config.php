<?php
try{
	$dsn = "mysql:dbname=locadora;host=localhost";
	$dbpass = "";
	$dbuser = "root";
	$pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
	echo "Erro ".$e->getMessage();
}
?>