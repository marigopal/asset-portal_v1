<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_category` WHERE `is_deleted` = '0' AND `category_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $category_uid = $row['category_uid'];
    $category_name = $row['category_name'];
    $category_prefix = $row['category_prefix'];
    $type = $row['type'];
    $category_imagename = $row['category_imagename'];
    
    $data_arr[] = array("category_uid " => $category_uid, "category_name" => $category_name, "category_prefix" => $category_prefix, "type" => $type, "category_imagename" => $category_imagename);
}
echo json_encode($data_arr);
?>