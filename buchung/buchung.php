<?php
/**
 * Created by PhpStorm.
 * User: Lukas Buttke
 * Date: 31.05.2018
 * Time: 15:23
 */

$dbconnect = new dbConnect();
$dbconnect->insertVerkauf($_POST["username"],$_POST["item_name"],$_POST["item_anzahl"],$_POST["item_price"],$_POST["item_barzahlung"]);
echo "<script> window.location.href='http://".$_SERVER['SERVER_NAME']."./buchung?usr=".$_POST["userid"]."' </script>";
