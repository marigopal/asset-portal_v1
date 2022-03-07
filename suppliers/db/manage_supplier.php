<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$supplier_uid = decrypt($_POST['supplier_uid']);
$suppliername = $_POST['suppliername'];
$supplier_address1 = $_POST['supplier_address1'];
$supplier_address2 = $_POST['supplier_address2'];
$supplier_city = $_POST['supplier_city'];
$supplier_state = $_POST['supplier_state'];
$countries = $_POST['countries'];
$supplier_zip = $_POST['supplier_zip'];
$supplier_contactname = $_POST['supplier_contactname'];
$supplier_phone = $_POST['supplier_phone'];
$supplier_fax = $_POST['supplier_fax'];
$supplier_email = $_POST['supplier_email'];
$supplier_url = $_POST['supplier_url'];
$supplier_notes = $_POST['supplier_notes'];
$img_name = $_POST['img_name'];
$uid = uniqid();
$uid = "SUPP_" . $uid;
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_supplier`(`supplier_uid`, `supplier_name`, `supplier_address1`, `supplier_address2`,"
            . "`supplier_city`, `supplier_state`, `supplier_country`, `supplier_zipcode`, `supplier_contactname`, "
            . "`supplier_phone`, `supplier_fax`, `supplier_email`, `supplier_url`, `supplier_notes`, `supplier_imagename`) "
            . "VALUES ('$uid','$suppliername','$supplier_address1','$supplier_address2','$supplier_city','$supplier_state','$countries',"
            . "'$supplier_zip','$supplier_contactname','$supplier_phone','$supplier_fax','$supplier_email','$supplier_url','$supplier_notes','$img_name')";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_supplier` SET `supplier_uid`='$supplier_uid',`supplier_name`='$suppliername',"
            . "`supplier_address1`='$supplier_address1',`supplier_address2`='$supplier_address2',"
            . "`supplier_city`='$supplier_city',`supplier_state`='$supplier_state',`supplier_country`='$countries',"
            . "`supplier_zipcode`='$supplier_zip',`supplier_contactname`='$supplier_contactname',"
            . "`supplier_phone`='$supplier_phone',`supplier_fax`='$supplier_fax',`supplier_email`='$supplier_email',"
            . "`supplier_url`='$supplier_url',`supplier_notes`='$supplier_notes',`supplier_imagename`='$img_name' WHERE `supplier_uid` = '$supplier_uid'";
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
    echo "1";
} else {

    echo "0";
}
?>