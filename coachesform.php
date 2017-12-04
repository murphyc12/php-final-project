<?php
include('config.php');

include('functions.php');

$action = $_GET['action'];

$coachesid = get('coachesid');

$coach = null;


//if the coaches info is not empty then return what is in the coaches info.
if(!empty($coachesid)) {
	$sql = file_get_contents('sql/getCoach.sql');
	$params = array(
		'coachesid' => $coachesid
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$coaches = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	$coach = $coaches[0];
}

//if submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$coachesid = $_POST['coachesid'];
	$name = $_POST['name'];
	$nationality = $_POST['nationality'];
	
	if($action == 'add') {
		$sql = file_get_contents('sql/addCoach.sql');
		$params = array(
			'coachesid' => $coachesid,
			'name' => $name,
			'nationality' => $nationality
		);
	
		$statement = $database->prepare($sql);
		$statement->execute($params);
	}
	
	elseif ($action == 'edit') {
		$sql = file_get_contents('sql/updateCoach.sql');
        $params = array( 
			'coachesid' => $coachesid,
            'name' => $name,
			'nationality' => $nationality
        );
        
        $statement = $database->prepare($sql);
        $statement->execute($params);	
	}
	
	// Redirect to back
	header('location: coaches.php');
}
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Manage Coach</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
		<center> <h1>Manage Coach</h1> </center> 
		<form action="" method="POST">
			<div class="form-element">
				<label>CoachID:</label>
				<?php if($action == 'add') : ?>
					<input type="text" name="coachesid" class="textbox" value="<?php echo $coach['coachesid'] ?>" />
				<?php else : ?>
					<input readonly type="text" name="coachesid" class="textbox" value="<?php echo $coach['coachesid'] ?>" />
				<?php endif; ?>
			</div>
			
			<div class="form-element">
				<label>Name:</label>
				<input type="text" name="name" class="textbox" value="<?php echo $coach['name'] ?>" />
			</div>
			
			<div class="form-element">
				<label>Nationality:</label>
				<input type="text" name="nationality" class="textbox" value="<?php echo $coach['nationality'] ?>" />
			</div>
			<div class="form-element">
				<input type="submit" class="button" value="Submit" />&nbsp; 
				<input type="reset" class="button" />
			</div>
		</form>
		
	</div>
</body>
</html>