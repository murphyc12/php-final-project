<?php

//Include the config file
include('config.php');
include('functions.php');
 
$search = get('search-term');
$coaches = searchCoaches($search,$database);

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
		<center> <h1>Coaches</h1> </center>
		<form method="GET">
			<input type="text" name="search-term" placeholder="Search..." />
			<input type="submit" class="button" value="Search" />
		</form>
		<?php foreach($coaches as $co) : ?>
			<p>
				<strong>Coach Number: </strong> <i><?php echo $co['coachesid']; ?></i><br />
				<strong>Coach Name: </strong> <?php echo $co['name']; ?> <br />
				<strong>Nationality: </strong><?php echo $co['nationality']; ?> <br />
				<a href="coachesform.php?action=edit&coachesid=<?php echo $co['coachesid'] ?>">Edit Coach</a><br />
				
				<!--<a href="book.php?isbn=<?php //echo $book['isbn'] ?>">View Player</a> -->
			</p>
		<?php endforeach; ?>
		 
		<!-- print currently accessed by the current username -->

		
		<!-- A link to the logout.php file -->
		<form action="index.php">
			<p><input type="submit" value="Home" class="button">
			<a href="coachesform.php?action=add"> <span>
			<input type="button" value="Add a Coach" class="button"></span> </a>
			<a href ="logout.php"><span>
			<input type="button" value="Logout" class="button" ></span></a></p>
		</form>
	</div>
</body>
</html>