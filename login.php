<?php

// Import Section
include "dbconnect.php";
session_start();

$dbconnect = new dbConnect();

if (!isset($_SESSION['username'])) {
	require_once "login_form.html";
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$pass = $_POST['pw'];
		$arrayWorker = $dbconnect->selectAll("Select * from workers");
		$is_Worker = false;

		foreach ($arrayWorker as $key => $value) {
			if (strcmp($value["username"], $username) == 0) {
				$is_Worker = true;
			}
		}
		var_dump($arrayWorker);
		if ($is_Worker && (strcmp("tequilala", $pass) == 0)) {
			$_SESSION['username'] = $username;

		} else {
			echo "<p style='color: crimson'> FALSCHE LOGIN DATEN" . PHP_EOL;
			echo $is_Worker . " " . strcmp("tequilala", $pass);
		}
	}
	echo "<script> document.location.reload </script>";
	echo "<script> document.location.reload </script>";
}

if (isset($_SESSION['username'])) {

	header("Location: features.html");

}
