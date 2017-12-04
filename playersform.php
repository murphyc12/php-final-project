<?php
include('config.php');

include('functions.php');

$action = $_GET['action'];

$playerid = get('playerid');

$player = null;

//if the player info is not empty then return what is in the players info.
if(!empty($playerid)) {
	$sql = file_get_contents('sql/getPlayer.sql');
	$params = array(
		'playerid' => $playerid
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$players = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	$player = $players[0];
}

//if submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$playerid = $_POST['playerid'];
	$name = $_POST['name'];
	$position = $_POST['position'];
	$year = $_POST['year'];
	$nationality = $_POST['nationality'];
	
	if($action == 'add') {
		$sql = file_get_contents('sql/addPlayer.sql');
		$params = array(
			'playerid' => $playerid,
			'name' => $name,
			'position' => $position,
			'year' => $year,
			'nationality' => $nationality
		);
	
		$statement = $database->prepare($sql);
		$statement->execute($params);
	}
	
	elseif ($action == 'edit') {
		$sql = file_get_contents('sql/updatePlayer.sql');
        $params = array( 
			'playerid' => $playerid,
            'name' => $name,
            'position' => $position,
            'year' => $year,
			'nationality' => $nationality
        );
        
        $statement = $database->prepare($sql);
        $statement->execute($params);	
	}
	
	// Redirect to back
	header('location: players.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Manage Player</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
		<center> <h1>Manage Player</h1> </center> 
		<form action="" method="POST">
			<div class="form-element">
				<label>PlayerID:</label>
				<?php if($action == 'add') : ?>
					<input type="text" name="playerid" class="textbox" value="<?php echo $player['playerid'] ?>" />
				<?php else : ?>
					<input readonly type="text" name="playerid" class="textbox" value="<?php echo $player['playerid'] ?>" />
				<?php endif; ?>
			</div>
			<div class="form-element">
				<label>Name:</label>
				<input type="text" name="name" class="textbox" value="<?php echo $player['name'] ?>" />
			</div>
			<div class="form-element">
				<label>Position: </label>
				<input type="text" name="position" class="textbox" value="<?php echo $player['position'] ?>" />
			</div>
			<div class="form-element">
				<label>Year:</label>
				<input type="text" name="year" class="textbox" value="<?php echo $player['year'] ?>" />
			</div>
			<div class="form-element">
				<label>Nationality:</label>
				<input type="text" name="nationality" class="textbox" value="<?php echo $player['nationality'] ?>" />
			</div>
			<div class="form-element">
				<input type="submit" class="button" value="Submit"/>&nbsp; 
				<input type="reset" class="button" />
			</div>
		</form>
	</div>
</body>
</html>