<?php

	// Loader - class and connection
	include('loader.php');
	
	// Catch start, end and id from javascript
	$title = $_POST['title'];
	$description = $_POST['description'];
	$start_date = $_POST['start_date'];
	$start_time = $_POST['start_time'];
	$end_date = $_POST['end_date'];
	$end_time = $_POST['end_time'];
	$color = $_POST['color'];
	$allDay = 'true';
	$url = $_POST['url'];
	
	if(empty($title) && empty($description)) {
		echo 'Fields cannot be empty';	
	} else {
		echo $calendar->addEvent($title, $description, $start_date, $start_time, $end_date, $end_time, $color, $allDay, $url);
	}
	

?>