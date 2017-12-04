<?php
	class Player {
	
	public $playerid;
	public $database;
	
	function __construct($playerid, $database) {
		$sql = file_get_contents('sql/getPlayer.sql');
	$params = array(
		'playerid' => $_SESSION["playerid"]
	);
	}
	}
	?>