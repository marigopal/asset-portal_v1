<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$company_uid = decrypt($_POST['company_uid']);
$companyname = $_POST['companyname'];
$img_name = $_POST['img_name'];
$uid = uniqid();
$uid = "COMP_" . $uid;
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_company`(`company_uid`, `company_name`, `company_imagename`) VALUES ('$uid','$companyname','$img_name')";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_company` SET `company_name`='$companyname',`company_imagename`='$img_name' WHERE `company_uid` = '$company_uid'";
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
    echo "1";
} else {

    echo "0";
}
?>