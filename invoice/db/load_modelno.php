<?php
include('../../include/lib_page.php');
$asset_model = $_POST['asset_model'];
$query2 = "SELECT * FROM `tbl_modelno` WHERE `is_deleted` = '0' and model_name = '$asset_model'";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $modelno_uid = $row['modelno_uid'];
    $model_number = $row['model_number'];

    $data_arr[] = array("modelno_uid" => $modelno_uid, "model_number" => $model_number);
}
echo json_encode($data_arr);
?>
