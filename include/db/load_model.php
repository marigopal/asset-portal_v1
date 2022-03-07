<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_models` WHERE `is_deleted` = '0' order by models_name asc";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $models_uid = $row['models_uid'];
    $models_name = $row['models_name'];
   
    $data_arr[] = array("models_uid" => $models_uid, "models_name" => $models_name);
}
echo json_encode($data_arr);
?>
