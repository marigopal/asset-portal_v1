<?php

date_default_timezone_set("Asia/Calcutta");
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'tbl_assetv1';
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//$connect = new PDO("mysql:host=10.0.21.134;dbname=db_asset", "root", "123456");
//
//$connection = mysqli_connect("10.0.21.134", "root", "123456", "db_asset");
?>