<?php
function searchPlayers($term, $database) {
	// Get list of players
	$term = $term . '%';
	$sql = file_get_contents('sql/getPlayers.sql');
	$params = array(
		'term' => $term
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$players = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $players;
}

function get($key) {
	if(isset($_GET[$key])) {
		return $_GET[$key];
	}
	
	else {
		return '';
	}
}

function searchCoaches($term, $database) {
	
	$term = $term . '%';
	$sql = file_get_contents('sql/getCoaches.sql');
	$params = array(
		'term' => $term
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$coaches = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $coaches;
}

function searchReviews($term, $database) {
	// Get list of reviews
	$term = $term . '%';
	$sql = file_get_contents('sql/joinReview.sql');
	$params = array(
		'term' => $term
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$reviews = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $reviews;
}

?>