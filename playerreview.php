<?php 

include('config.php');
include('functions.php');

$search = get('search-term');
$reviews = searchReviews($search,$database);

?> 

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Player Recruitment</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
		<center><h1>Player Recruitment</h1></center>
		
		<?php foreach($reviews as $rev) : ?>
			<p>
				<strong>Player Number: </strong> <i><?php echo $rev['playerid']; ?></i><br />
				<strong>Player Name: </strong> <?php echo $rev['name']; ?> <br />
				<strong>Recruitment: </strong><?php echo $rev['review']; ?> <br />
				
			</p>
		<?php endforeach; ?>
		
		
		<form action="index.php">
			<p>
			<input type="submit" value = "Home" class="button">
			
			<a href ="logout.php"><span>
			<input type="button" value = "Logout" class="button"></span></a>
			</p>
		</form>
	</div>
</body>
</html>