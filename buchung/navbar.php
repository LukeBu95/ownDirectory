<?php


/**
 * Created by PhpStorm.
 * User: Lukas Buttke
 * Date: 30.05.2018
 * Time: 16:58
 */

if (isset($_COOKIE["username"])) {

	$adminUser = false;
	if(!isset($_COOKIE["admin"])) {
		include "../dbconnect.php";
		$dbconnect = new dbConnect();
		$arrayUser = $dbconnect->selectSingleParam("Select admin from workers where username = :username",$_COOKIE["username"]);
		foreach ($arrayUser as $key => $value) {
			if (strcmp($value,"1" ) == 0) {
				$adminUser = true;
			}
		}
	}

	if ($adminUser){

		setcookie("admin", true, time() + 28000 , "/"); // 86400 = 1 day
		include_once "nav_admin.html";
	}
	else{
		setcookie("admin", false, time() + 28000 , "/"); // 86400 = 1 day
		include_once "nav_user.html";
	}

}



