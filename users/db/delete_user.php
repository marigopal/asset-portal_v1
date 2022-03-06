<?php

include('../../include/lib_page.php');
$delete_id = $_POST['uid'];
$status = 'Delete';
$delete_query = "UPDATE `tbl_users` SET `is_deleted`='1' WHERE `users_uid` = '$delete_id'";
if ($result = $con->query($delete_query)) {
    $logs_qry = "INSERT INTO `tbl_users_log`(`done_on`, `done_by`, `action`, `user_id`) VALUES (now(),'" . $_COOKIE['user_id'] . "','$status','$delete_id')";
    if ($result_log = $con->query($logs_qry)) {
        echo "1";
    }
} else {
    echo "0";
}
?>