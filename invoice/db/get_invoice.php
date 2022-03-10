<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_invoice` WHERE `is_deleted` = '0' AND `invoice_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $invoice_uid = $row['invoice_uid'];
    $invoice_date = date("d-m-Y",strtotime($row['invoice_date']));
    $invoice_no = $row['invoice_no'];
    $supplier = $row['supplier'];
    $purchase_date = date("d-m-Y",strtotime($row['purchase_date']));;
    $purchase_no = $row['purchase_no'];
    $purchase_cost = $row['purchase_cost'];
    $inv_filename = $row['inv_filename'];
    $data_arr[] = array("invoice_uid " => $invoice_uid, "invoice_date" => $invoice_date, "invoice_no" => $invoice_no, "supplier" => $supplier, "purchase_date" => $purchase_date, "purchase_no" => $purchase_no, "purchase_cost" => $purchase_cost, "inv_filename" => $inv_filename);
}
echo json_encode($data_arr);
?>
