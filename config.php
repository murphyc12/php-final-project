<?php
	
	//Connect to the database
	
	$username = "murphyc12";
	$password = "j9Ewriek";
	
	
	$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_fall17_murphyc12', $username, $password);
	$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	
	
	function autoloader($class){
	include ('class.' . $class . '.php');
		}
	spl_autoload_register('autoloader');

	session_start();

$current_url = basename($_SERVER['REQUEST_URI']);

// if customerID is not set in the session and current URL not login.php redirect to login page
if (!isset($_SESSION["playerid"]) && $current_url != 'login.php') {
    header("Location: login.php");
}

// Else if playerid is set get $player from the database
elseif (isset($_SESSION["playerid"])) {
	$player = new Player($_SESSION["playerid"],$database);
}

	?>