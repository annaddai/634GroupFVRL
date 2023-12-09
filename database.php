<?php
/*Change these credentials to your local database. 
The credentials should work beacuase the database 
is also hosted on the internet which will not be 
the case for you projects*/
$server = 'localhost';
$username = 'root1';
$password = '1q2w3e4r';
$database = 'myaccount';

/*Try-Catch is another condition statment like if-else. 
If-else checks condition and run codes after. Try-catch will
try execution first and catch if the codes doesn't execute*/
try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}

?>