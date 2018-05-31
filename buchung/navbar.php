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
		include "../dbconnect.php";
		$dbconnect = new dbConnect();
		$arrayUser = $dbconnect->selectSingleParam("Select admin from workers where username = :username",$_SESSION['username']);
		foreach ($arrayUser as $key => $value) {
			if (strcmp($value,"1" ) == 0) {
				$adminUser = true;
			}
		}
	}

	if ($adminUser){
		include_once "nav_admin.html";
	}
	else{
		include_once "nav_user.html";
	}

}



