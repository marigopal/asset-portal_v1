<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_modelno` WHERE `is_deleted` = '0' AND `modelno_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $modelno_uid = $row['modelno_uid'];
    $model_name = $row['model_name'];
    $model_number = $row['model_number'];
    $modelno_image = $row['modelno_image'];
    
    $data_arr[] = array("modelno_uid " => $modelno_uid, "model_name" => $model_name, "model_number" => $model_number, "modelno_image" => $modelno_image);
}
echo json_encode($data_arr);
?>