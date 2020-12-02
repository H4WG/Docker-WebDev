<?php

	$mysqli = new mysqli("mysql", "user", "password");
	if ($mysqli->connect_errno) {
		echo "Невдалося з'єднатися з БД: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	echo $mysqli->host_info . "\n";

?>

<? echo "PHP short tag"; ?>
