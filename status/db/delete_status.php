<?php

include('../../include/lib_page.php');
$delete_id = $_POST['uid'];
$delete_query = "UPDATE `tbl_status` SET `is_deleted`='1' WHERE `status_uid` = '$delete_id'";
$status = 'Delete';
if ($result = $con->query($delete_query)) {
    
    $logs_query = "INSERT INTO `tbl_status_logs`(`done_on`, `done_by`, `status_id`, `action`, `remarks` "
            . ") VALUES (now(),'" . $_COOKIE['user_id'] . "','$delete_id','$status','')";
//    echo $logs_query;exit();
    if ($result_log = $con->query($logs_query)) {
        echo "1";
    }
} else {
    echo "0";
}
?>