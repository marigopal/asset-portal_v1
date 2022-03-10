<?php
include('../../include/lib_page.php');

$query2 = "SELECT * FROM `tbl_supplier` WHERE `is_deleted` = '0' order by supplier_name asc";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $supplier_uid = $row['supplier_uid'];
    $supplier_name = $row['supplier_name'];
   
    $data_arr[] = array("supplier_uid" => $supplier_uid, "supplier_name" => $supplier_name);
}
echo json_encode($data_arr);
?>
