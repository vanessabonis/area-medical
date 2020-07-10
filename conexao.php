<?php
/*
* Change the value of $password if you have set a password on the root userid
* Change NULL to port number to use DBMS other than the default using port 3306
*
*/
$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'login'; //To be completed to connect to a database. The database must exist.
$port = 3308; //Default must be NULL to use default port
$localhost = "127.0.0.1";

global $pdo;

try{

	$pdo = new PDO('mysql:host=127.0.0.1:3308;dbname=login', $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

	echo "ERRO: ".$e->getMessage();
	exit();
}



