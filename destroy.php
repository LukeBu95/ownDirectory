<?php
/**
 * Created by PhpStorm.
 * User: Lukas Buttke
 * Date: 29.05.2018
 * Time: 16:59
 */

session_destroy();
if (isset($_SERVER['HTTP_COOKIE'])) {
	$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
	foreach($cookies as $cookie) {
		$parts = explode('=', $cookie);
		$name = trim($parts[0]);
		setcookie($name, '', time()-1000);
		setcookie($name, '', time()-1000, '/');
	}
}
echo "<script> window.location.href='http://".$_SERVER['SERVER_NAME']."' </script>";



