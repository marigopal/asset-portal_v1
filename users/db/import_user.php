<?php

include('../../include/lib_page.php');
$password = encrypt('123456');
if (isset($_POST["import"])) {
    $truncate_table = "TRUNCATE TABLE tbl_import_users";
    $truncate_query = mysqli_query($con,$truncate_table);
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
           $uid = uniqid();
            $sqlInsert = "INSERT INTO `tbl_import_users`(`users_uid`, `emp_id`, `firstname`, `lastname`, `username`, `password`) "
                    . "VALUES ('$uid','" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','$password')";
            $result = mysqli_query($con, $sqlInsert);
            if (!empty($result)) {
                header("Location: Insert_importusers");
            } else {
                echo "<script>
                    alert('Please check CSV File..! Have a nice Day..!');
                    window.location.href='../import_user';
                    </script>";
            }
        }
    }
}
$check_empid_query = "UPDATE tbl_import_users INNER JOIN tbl_users on tbl_users.emp_id = tbl_import_users.emp_id set tbl_import_users.status = '1'";
$empid_result = mysqli_query($con, $check_empid_query);
$check_username_query = "UPDATE tbl_import_users INNER JOIN tbl_users on tbl_users.username = tbl_import_users.username SET tbl_import_users.status = '2'";
$empid_result = mysqli_query($con, $check_username_query);
?>