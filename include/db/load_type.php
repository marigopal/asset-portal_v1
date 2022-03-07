<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_type` WHERE `is_deleted` = '0' ORDER BY `type_name` ASC";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $type_uid = $row['type_uid'];
    $type_name = $row['type_name'];
   
    $data_arr[] = array("type_uid" => $type_uid, "type_name" => $type_name);
}
echo json_encode($data_arr);
?>
