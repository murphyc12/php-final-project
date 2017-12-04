<?php

//Include the config file
include('config.php');
include('functions.php');
 
$search = get('search-term');
$players = searchPlayers($search,$database);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Players</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
		<center><h1>Players</h1></center>
		<form method="GET">
			<input type="text" name="search-term" placeholder="Search..." />
			<input type="submit" class="button" value="Search" />
		</form>
		<?php foreach($players as $play) : ?>
			<p>
				<strong>Player Number: </strong> <i><?php echo $play['playerid']; ?></i><br />
				<strong>Player Name: </strong> <?php echo $play['name']; ?> <br />
				<strong>Position: </strong><?php echo $play['position']; ?> <br />
				<strong>Year: </strong><?php echo $play['year']; ?> <br />
				<strong>Nationality: </strong><?php echo $play['nationality']; ?> <br />
				<a href="playersform.php?action=edit&playerid=<?php echo $play['playerid'] ?>">Edit Player</a><br />
				
			</p>
		<?php endforeach; ?>
		
		
		<form action="index.php">
			<p>
			<input type="submit" value = "Home" class="button">
			
			<a href="playerreview.php"> <span>
			<input type="button" value="Player Recruitment" class="button"> </span> </a>
			
			<a href="playersform.php?action=add"> <span>
			<input type="button" value="Add a Player" class="button"></span> </a>
			
			<a href ="logout.php"><span>
			<input type="button" value = "Logout" class="button"></span></a>
			</p>
		</form>
	</div>
</body>
</html>