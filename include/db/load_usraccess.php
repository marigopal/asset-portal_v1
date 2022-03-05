<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_useraccess` WHERE `is_deleted` = '0' order by access_name asc";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $usraccess_uid = $row['usraccess_uid'];
    $access_name = $row['access_name'];
   
    $data_arr[] = array("usraccess_uid" => $usraccess_uid, "access_name" => $access_name);
}
echo json_encode($data_arr);
?>
