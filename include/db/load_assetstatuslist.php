<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_status` WHERE `is_deleted` = '0' and (status_uid = 'STS_62272cc760811' or status_uid = 'STS_6239714dcf45d') order by seq_id asc";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $status_uid = $row['status_uid'];
    $status_name = $row['status_name'];
   
    $data_arr[] = array("status_uid" => $status_uid, "status_name" => $status_name);
}
echo json_encode($data_arr);
?>
