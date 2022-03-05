<?php

include('../../include/lib_page.php');
if (isset($_POST["import"])) {
    $truncate_table = "TRUNCATE TABLE  tbl_users_import";
    $truncate_query = mysqli_query($con,$truncate_table);

    $fileName = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {

        $file = fopen($fileName, "r");

        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $uid = uniqid();
            $uid = "USR" . $uid;
            $sqlInsert = "INSERT INTO `tbl_users_import`(`users_uid`, `emp_id`, `firstname`, `lastname`, `username`, `password`) "
                    . "VALUES ('$uid','" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "')";
       
            $result = mysqli_query($con, $sqlInsert);

            if (!empty($result)) {
                echo "<script>
alert('Imported Successfully');
window.location.href='../import_user';
</script>";
            } else {
                echo "<script>
alert('Please check CSV File..! Have a nice Day..!');
window.location.href='../import_user';
</script>";
            }
        }
    }
}
$check_empid_query = "UPDATE tbl_users_import INNER JOIN tbl_users on tbl_users.emp_id = tbl_users_import.emp_id set tbl_users_import.status = '1'";
$empid_result = mysqli_query($con,$check_empid_query);
$check_username_query = "UPDATE tbl_users_import INNER JOIN tbl_users on tbl_users.username = tbl_users_import.username SET tbl_users_import.status = '2'";
$empid_result = mysqli_query($con,$check_username_query);
?>