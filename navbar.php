<?php


/**
 * Created by PhpStorm.
 * User: Lukas Buttke
 * Date: 30.05.2018
 * Time: 16:58
 */

if (isset($_SESSION['username'])) {

	$adminUser = false;
	if(!isset($_SESSION['admin'])) {
		include "dbconnect.php";
		$dbconnect = new dbConnect();
		$arrayUser = $dbconnect->selectSingleParam("Select admin from workers where username = :username",$_SESSION['username']);
		var_dump($arrayUser);
		foreach ($arrayUser as $key => $value) {
			if ($value["admin"] == 1) {
				$adminUser = true;
			}
		}
	}elseif ($adminUser){
		echo '';
	}

}
else{

}

?>


