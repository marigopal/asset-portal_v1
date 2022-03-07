<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$manufacturers_uid = decrypt($_POST['manufacturers_uid']);
$manufacturers_name = $_POST['manufacturers_name'];
$manufacturers_url = $_POST['manufacturers_url'];
$manufacturers_supporturl = $_POST['manufacturers_supporturl'];
$manufacturers_supportphone = $_POST['manufacturers_supportphone'];
$manufacturers_supportemail = $_POST['manufacturers_supportemail'];
$img_name = $_POST['img_name'];
$uid = uniqid();
$uid = "MANU_" . $uid;
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_manufacturers`(`manufacturers_uid`, `manufacturers_name`, `manufacturers_url`,"
            . " `manufacturers_supporturl`, `manufacturers_supportphone`, `manufacturers_supportemail`, "
            . "`manufacturers_image`) VALUES ('$uid','$manufacturers_name','$manufacturers_url','$manufacturers_supporturl',"
            . "'$manufacturers_supportphone','$manufacturers_supportemail','$img_name')";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_manufacturers` SET `manufacturers_name`='$manufacturers_name',"
            . "`manufacturers_url`='$manufacturers_url',`manufacturers_supporturl`='$manufacturers_supporturl',"
            . "`manufacturers_supportphone`='$manufacturers_supportphone',`manufacturers_supportemail`='$manufacturers_supportemail',"
            . "`manufacturers_image`='$img_name' WHERE `manufacturers_uid` = '$manufacturers_uid'";
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
    echo "1";
} else {

    echo "0";
}
?>