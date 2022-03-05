<?php

include('../../include/lib_page.php');

$insert_users = "INSERT INTO `tbl_users`(`emp_id`, `firstname`, `lastname`, `username`, `password`) SELECT `emp_id`, `firstname`, `lastname`, `username`, `password` FROM `tbl_users_import`";
$insertuser_result = mysqli_query($con, $insert_users);
$truncate_table = "TRUNCATE TABLE  tbl_users_import";
$truncate_query = mysqli_query($con, $truncate_table);
if (!empty($insertuser_result)) {
                echo "<script>
alert('Inserted Successfully');
window.location.href='../index';
</script>";
            } else {
                echo "<script>
alert('Please check CSV File..! Have a nice Day..!');
window.location.href='../import_user';
</script>";
            }
?>