<?php
/**
 * Created by PhpStorm.
 * User: Lukas Buttke
 * Date: 29.05.2018
 * Time: 16:59
 */
setcookie("username", "", time() - 3600);
setcookie("admin", "", time() - 3600);

header("Status: 200");
header("Location: http://".$_SERVER["SERVER_NAME"]);

