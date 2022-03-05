<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '10.0.21.134');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456');
define('DB_NAME', 'db_asset');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("select b.category_name,COUNT(*) as count from tbl_component a LEFT JOIN tbl_category b on b.category_uid = a.category group by b.category_name");
//echo $query;exit();
//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
?>