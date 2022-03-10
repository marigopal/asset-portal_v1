<?php

include('../../include/lib_page.php');
$delete_id = $_POST['uid'];
$delete_query = "UPDATE `tbl_modelno` SET `is_deleted`='1' WHERE `modelno_uid` = '$delete_id'";
$status = 'Delete';
if ($result = $con->query($delete_query)) {
    
    $logs_query = "INSERT INTO `tbl_modelno_logs`(`done_on`, `done_by`, `modelno_id`, `action`, `remarks`) "
            . "VALUES (now(),'" . $_COOKIE['user_id'] . "','$delete_id','$status','')";
    if ($result_log = $con->query($logs_query)) {
        echo "1";
    }
} else {
    echo "0";
}
?>