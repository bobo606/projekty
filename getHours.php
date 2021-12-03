<?php
	echo(time());
	echo("<br>");
	echo(date('Y-m-d H:i:s'));
	echo("<br>");
	echo(date());
	
	$now = new DateTime();
	echo $now->format('Y-m-d H:i:s');    // MySQL datetime format
	echo("<br>");
	echo $now->getTimestamp();           // Unix Timestamp -- Since PHP 5.3

	//$date = $_GET['date'];

	//if ( isset($date) && $date > time()) {
	//	$data = [ 'a', 'b', 'c' ];
		// will encode to JSON array: ["a","b","c"]
		// accessed as example in JavaScript like: result[1] (returns "b")
	//} else {
	//	$data = [ 'name' => 'God', 'age' => -1 ];
		// will encode to JSON object: {"name":"God","age":-1}  
		// accessed as example in JavaScript like: result.name or result['name'] (returns "God")
	//}

	//header('Content-type: application/json');
	//echo json_encode( $data );
?>