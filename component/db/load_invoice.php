<?php
include('../../include/lib_page.php');
$supplier_select = $_POST['supplier_select'];
$query2 = "SELECT * FROM `tbl_invoice` WHERE `is_deleted` = '0' and supplier = '$supplier_select'";

$result = mysqli_query($con,$query2);
$data_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $invoice_uid = $row['invoice_uid'];
    $invoice_no = $row['invoice_no'];
   
    $data_arr[] = array("invoice_uid" => $invoice_uid, "invoice_no" => $invoice_no);
}
echo json_encode($data_arr);
?>
