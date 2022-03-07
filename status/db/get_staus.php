<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_status` WHERE `is_deleted` = '0' AND `status_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $status_uid = $row['status_uid'];
    $status_name = $row['status_name'];
    $data_arr[] = array("status_uid " => $status_uid, "status_name" => $status_name);
}
echo json_encode($data_arr);
?>