<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_locations` WHERE `is_deleted` = '0' order by location_name asc";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $location_uid = $row['location_uid'];
    $location_name = $row['location_name'];
   
    $data_arr[] = array("location_uid" => $location_uid, "location_name" => $location_name);
}
echo json_encode($data_arr);
?>
