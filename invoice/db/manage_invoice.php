<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$invoice_uid = decrypt($_POST['invoice_uid']);
$pod = $_POST['pod'];
if($pod == '')
{
    $pod = '0000-00-00';
}else{
$pod = date("Y-m-d", strtotime($pod));}
$pon = $_POST['pon'];
$poc = $_POST['poc'];
$supplier = $_POST['supplier'];
$invdate = $_POST['invdate'];
$invdate = date("Y-m-d", strtotime($invdate));
$invno = $_POST['invno'];
$img_name = $_POST['img_name'];
$uid = uniqid();
$uid = "CATE_" . $uid;
if ($isNew === 'true') {
    $sql = "";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_invoice` SET `invoice_date`='$invdate',`invoice_no`='$invno',`supplier`='$supplier',"
            . "`purchase_date`='$pod',`purchase_no`='$pon',`purchase_cost`='$poc',`inv_filename` = '$img_name' WHERE `invoice_uid` = '$invoice_uid'";
}
// echo $sql;exit();
if ($result = $con->query($sql)) {
    echo "1";
} else {

    echo "0";
}
?>
