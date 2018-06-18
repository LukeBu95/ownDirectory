<?php


/**
 * Created by PhpStorm.
 * User: Lukas Buttke
 * Date: 30.05.2018
 * Time: 16:58
 */
include_once "nav_user.html";

if (isset($_GET["usr"])) {

	$adminUser = false;
	if (!isset($_COOKIE["admin"])) {
		include "../dbconnect.php";
		$dbconnect = new dbConnect();
		$adminUser = $dbconnect->loginAdmin($_GET["usr"]);

	}
	if ($adminUser) {
		include_once "nav_admin.html";
	} else {
		include_once "nav_user.html";
	}

}




