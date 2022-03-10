<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_category` WHERE `is_deleted` = '0' order by category_name asc";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $category_uid = $row['category_uid'];
    $category_name = $row['category_name'];
   
    $data_arr[] = array("category_uid" => $category_uid, "category_name" => $category_name);
}
echo json_encode($data_arr);
?>
