<?php

// Import Section
include "dbconnect.php";
session_start();

$dbconnect = new dbConnect();

if (!isset($_SESSION['username'])) {
	if (isset($_POST['user'])) {
		$username = $_POST['user'];
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

}

if (isset($_SESSION['username'])) {

    //echo "<script> alert('test123') </script>";

    header("Status: 200");
    header("Location: ./buchung");


}

?>

<script type="text/javascript">
    function verkaufsstart(){

    }

</script>
