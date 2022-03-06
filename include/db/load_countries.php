<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_countries` WHERE `is_deleted` = '0' order by countries_name asc";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $countries_uid = $row['countries_uid'];
    $countries_name = $row['countries_name'];
   
    $data_arr[] = array("countries_uid" => $countries_uid, "countries_name" => $countries_name);
}
echo json_encode($data_arr);
?>
