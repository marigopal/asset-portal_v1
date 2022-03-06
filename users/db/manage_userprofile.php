<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$user_id = decrypt($_POST['user_id']);
$emp_id = $_POST['emp_id'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$country = $_POST['country'];


if ($isNew === 'true') {
    
} else if ($isNew === 'false') {
    $query = "UPDATE `tbl_users` SET `emp_id`='$emp_id',`firstname`='$fname',`lastname`='$lname',`mobile_no`='$mobile',"
            . "`email_address`='$email',`address1`='$address1',`address2`='$address2',`country`='$country',`city`='$city',`is_firstlogin`='0' WHERE `users_uid` = '$user_id'";
}
//echo $query;exit();
if ($result = $con->query($query)) {
    echo "1";
} else {
    echo "0";
}
?>