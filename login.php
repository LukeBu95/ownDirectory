<?php

// Import Section
include "dbconnect.php";
$dbconnect = new dbConnect();
$loggedIn = false;

if (!isset($_COOKIE["username"])) {
	if (isset($_POST['user'])) {
		$username = $_POST['user'];
		$pass = $_POST['pw'];
		$arrayWorker = $dbconnect->selectAll("Select username from workers");
		$is_Worker = false;

		foreach ($arrayWorker as $key => $value) {
			if (strcmp($value["username"], $username) == 0) {
				$is_Worker = true;
				echo "Worker is correct <br>";
			}
		}
		//var_dump($arrayWorker);
		if ($is_Worker && (strcmp("tequilala", $pass) == 0)) {
			setcookie("username", $username, time() + 28000 , "/"); // 86400 = 1 day
			$loggedIn = true;
			echo "Password is correct <br>";

		} else {
			echo "<p style='color: crimson'> FALSCHE LOGIN DATEN" . PHP_EOL;

		}

		echo "worker:".$is_Worker . "pwgleich:" . strcmp("tequilala", $pass)." cookie:".$_COOKIE["username"];
	}

}

if ($loggedIn) {

    header("Status: 200");
    header("Location: ./buchung");
}
