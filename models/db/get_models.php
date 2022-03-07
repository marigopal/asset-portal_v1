<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_models` WHERE `is_deleted` = '0' AND `models_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $models_uid = $row['models_uid'];
    $models_name = $row['models_name'];
    $models_image = $row['models_image'];
    
    $data_arr[] = array("models_uid " => $models_uid, "models_name" => $models_name, "models_image" => $models_image);
}
echo json_encode($data_arr);
?>