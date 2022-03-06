<?php

include('../../include/lib_page.php');

$insert_users = "INSERT INTO `tbl_users`(`users_uid`,`emp_id`, `firstname`, `lastname`, `username`, `password`) SELECT `users_uid`,`emp_id`, `firstname`, `lastname`, `username`, `password` FROM `tbl_import_users` where status = '0'";
$insertuser_result = mysqli_query($con, $insert_users);
$del_imported = "DELETE FROM `tbl_import_users` WHERE `status` = '0'";
$del_query = mysqli_query($con, $del_imported);
if (!empty($insertuser_result)) {
                echo "<script>
alert('Please check status in Import Page..!');
window.location.href='../import_user';
</script>";
            } else {
                echo "<script>
alert('Please check CSV File..! Have a nice Day..!');
window.location.href='../import_user';
</script>";
            }
?>