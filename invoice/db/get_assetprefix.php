<?php

include('../../include/lib_page.php');
$id = $_POST['id'];
$sql = "SELECT * FROM `tbl_category` WHERE `is_deleted` = '0' AND `category_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $category_uid = $row['category_uid'];
    $category_prefix = $row['category_prefix'];

    $data_arr[] = array("category_uid " => $category_uid, "category_prefix" => $category_prefix);
}
echo json_encode($data_arr);
?>
