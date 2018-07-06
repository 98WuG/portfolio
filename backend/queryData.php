<?php

function queryData($field, $table, $id) {
	$ini_array = parse_ini_file("config.ini");
	$dbhost = $ini_array["dbhost"];
	$dbuser = $ini_array["dbuser"];
	$dbpass = $ini_array["dbpass"];
	$db = $ini_array["db"];
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

	if(mysqli_connect_errno()) {
		die('Could not connect: ' . mysqli_connect_error());
	}

	$sql = 'SELECT ' . $field . ' FROM ' . $table . ' WHERE id=' . $id;
	$retval = mysqli_query($conn, $sql);

	if(! $retval) {
		die('Could not get data: ' . mysqli_error());
	}


	if(mysqli_num_rows($retval) > 0) {
		while($row = mysqli_fetch_assoc($retval)) {
			return $row[$field];
		}
	} else {
		return "DBQuery Error";
	}

	mysqli_close($conn);
}

?>
