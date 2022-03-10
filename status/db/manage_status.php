<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$status_uid = decrypt($_POST['status_uid']);
$status_name = $_POST['status_name'];
if($status_uid == ''){
$uid = uniqid();
$status_uid = "STS_" . $uid;
}
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_status`(`status_uid`, `status_name`) VALUES ('$status_uid','$status_name')";
    $status = "Create";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_status` SET `status_name`='$status_name' WHERE `status_uid` = '$status_uid'";
    $status = "Update";    
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
    $logs_query = "INSERT INTO `tbl_status_logs`(`done_on`, `done_by`, `status_id`, `action`, `remarks` "
            . ") VALUES (now(),'" . $_COOKIE['user_id'] . "','$status_uid','$status','')";
//    echo $logs_query;exit();
    if ($result_log = $con->query($logs_query)) {
        echo "[{\"status\":\"1\",\"status_id\":\"" . $status_uid . "\"}]";
    }
   
} else {

    echo "[{\"status\":\"0\"}]";
}
?>