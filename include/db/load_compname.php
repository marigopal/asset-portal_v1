<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_component` WHERE `is_deleted` = '0' order by asset_tag asc";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $component_uid = $row['component_uid'];
    $asset_tag = $row['asset_tag'];
   
    $data_arr[] = array("component_uid" => $component_uid, "asset_tag" => $asset_tag);
}
echo json_encode($data_arr);
?>
