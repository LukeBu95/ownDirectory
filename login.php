<?php

// Import Section
include "dbconnect.php";
session_start();
$dbconnect = new dbConnect();
$loggedIn = false;
$userID = NULL;

if (!isset($_COOKIE["username"])) {
	if (isset($_POST['user'])) {
		$username = $_POST['user'];
		$pass = $_POST['pw'];

		$user = false;
		$userID = $dbconnect->loginUser($username);

		if(!empty($userID)){

			$user = true;
			echo "Username is correct <br>"; }

		//var_dump($arrayWorker);
		if ($user && (strcmp("tequilala", $pass) == 0)) {
			//setcookie("username", $username, time() + 28000 , "/"); // 86400 = 1 day
			$loggedIn = true;
			echo "Password is correct <br>";

		} else {
			echo "<p style='color: crimson'> FALSCHE LOGIN DATEN" . PHP_EOL;

		}

		echo "worker:".$userID . "pwgleich:" . strcmp("tequilala", $pass)."<br>";
	}

}
echo '<a href="destroy.php"> ZURÜCK! </a>';

if ($loggedIn) {
	echo "<script> window.location.href='./buchung?usr=".$userID."' </script>";
}elseif (!$loggedIn){
	echo "<script> window.location.href='destroy.php' </script>";
}
