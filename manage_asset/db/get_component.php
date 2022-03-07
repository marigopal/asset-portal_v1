<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_component` WHERE `is_deleted` = '0' AND `component_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $component_uid = $row['component_uid'];
    $asset_tag = $row['asset_tag'];
    $warranty = $row['warranty'];
    $category = $row['category'];
    $manufacturer = $row['manufacturer'];
    $model = $row['model'];
    $model_no = $row['model_no'];
    $serialno = $row['serialno'];
    $remarks = $row['remarks'];
    $assigned_user = $row['assigned_user'];
    
    
    $data_arr[] = array("component_uid " => $component_uid, "asset_tag" => $asset_tag, "warranty" => $warranty, "category" => $category, "manufacturer" => $manufacturer, "model" => $model, "model_no" => $model_no, "serialno" => $serialno, "remarks" => $remarks, "assigned_user" => $assigned_user);
}
echo json_encode($data_arr);
?>