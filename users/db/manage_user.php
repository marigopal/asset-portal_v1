<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$user_id = $_POST['user_id'];
$emp_id = $_POST['emp_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = encrypt($_POST['password']);
$usr_access = $_POST['usr_access'];
if($user_id == '')
{
$user_id = uniqid();
}
if ($isNew === 'true') {
    $query = "INSERT INTO `tbl_users`(`users_uid`,`emp_id`, `firstname`,`lastname`, `username`,`password`,`is_firstlogin`,`user_access`) 
    VALUES ('$user_id','$emp_id','$fname','$lname','$username','$password','1','$usr_access')";
} else if ($isNew === 'false') {
    $query = "UPDATE `tbl_users` SET `emp_id`='$emp_id',`firstname`='$fname',`lastname`='$lname',`username`='$username',`password`='$password',`user_access`='$usr_access' WHERE `users_uid` = '$user_id'";
}
if ($result = $con->query($query)) {
      echo "[{\"user\":\"" . $user_id . "\"}]";
} else {
    echo "0";
}
?>