<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$status_uid = decrypt($_POST['status_uid']);
$status_name = $_POST['status_name'];
$uid = uniqid();
$uid = "STS_" . $uid;
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_status`(`status_uid`, `status_name`) VALUES ('$uid','$status_name')";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_status` SET `status_name`='$status_name' WHERE `status_uid` = '$status_uid'";
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
   echo "[{\"status\":\"1\",\"status_id\":\"" . $uid . "\"}]";
} else {

    echo "[{\"status\":\"0\"}]";
}
?>