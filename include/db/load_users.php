<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_users` WHERE `is_deleted` = '0' ORDER BY `firstname` ASC";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $users_uid = $row['users_uid'];
    $emp_id = $row['emp_id'];
    $firstname = $row['firstname'];
    $username = $row['username'];
   
    $data_arr[] = array("users_uid" => $users_uid, "firstname" => $firstname, "emp_id" => $emp_id, "username" => $username);
}
echo json_encode($data_arr);
?>
