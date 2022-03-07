<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_supplier` WHERE `is_deleted` = '0' AND `supplier_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $supplier_uid = $row['supplier_uid'];
    $supplier_name = $row['supplier_name'];
    $supplier_address1 = $row['supplier_address1'];
    $supplier_address2 = $row['supplier_address2'];
    $supplier_city = $row['supplier_city'];
    $supplier_state = $row['supplier_state'];
    $supplier_country = $row['supplier_country'];
    $supplier_zipcode = $row['supplier_zipcode'];
    $supplier_contactname = $row['supplier_contactname'];
    $supplier_phone = $row['supplier_phone'];
    $supplier_fax = $row['supplier_fax'];
    $supplier_email = $row['supplier_email'];
    $supplier_url = $row['supplier_url'];
    $supplier_notes = $row['supplier_notes'];
    $supplier_imagename = $row['supplier_imagename'];
    $data_arr[] = array("supplier_uid " => $supplier_uid, "supplier_name" => $supplier_name, "supplier_address1" => $supplier_address1, "supplier_address2" => $supplier_address2, "supplier_city" => $supplier_city, "supplier_state" => $supplier_state, "supplier_country" => $supplier_country, "supplier_zipcode" => $supplier_zipcode, "supplier_contactname" => $supplier_contactname, "supplier_phone" => $supplier_phone, "supplier_fax" => $supplier_fax, "supplier_email" => $supplier_email, "supplier_url" => $supplier_url, "supplier_notes" => $supplier_notes, "supplier_imagename" => $supplier_imagename);
}
echo json_encode($data_arr);
?>