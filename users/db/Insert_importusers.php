<?php

include('../../include/lib_page.php');

$insert_users = "INSERT INTO `tbl_users`(`users_uid`,`emp_id`, `firstname`, `lastname`, `username`, `password`) SELECT `users_uid`,`emp_id`, `firstname`, `lastname`, `username`, `password` FROM `tbl_import_users` where status = '0'";
$insertuser_result = mysqli_query($con, $insert_users);

if (!empty($insertuser_result)) {
    $status = 'Create';
    $current_user =  $_COOKIE['user_id'];
    $current_date = date("Y-m-d h:i:s");
    $logs_qry = "INSERT INTO `tbl_users_log` (`done_on`, `done_by`, `action`, `user_id`) SELECT '$current_date','$current_user','$status', `users_uid` FROM `tbl_import_users` where status = '0'";
//    echo $logs_qry;exit();
    if ($result_log = $con->query($logs_qry)) {
        $del_imported = "DELETE FROM `tbl_import_users` WHERE `status` = '0'";
        $del_query = mysqli_query($con, $del_imported);
        echo "<script>
alert('Please check status in Import Page..!');
window.location.href='../import_user';
</script>";
    }
} else {
    echo "<script>
alert('Please check CSV File..! Have a nice Day..!');
window.location.href='../import_user';
</script>";
}
?>