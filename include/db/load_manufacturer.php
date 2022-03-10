<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_manufacturers` WHERE `is_deleted` = '0' order by manufacturers_name asc";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $manufacturers_uid = $row['manufacturers_uid'];
    $manufacturers_name = $row['manufacturers_name'];
   
    $data_arr[] = array("manufacturers_uid" => $manufacturers_uid, "manufacturers_name" => $manufacturers_name);
}
echo json_encode($data_arr);
?>
