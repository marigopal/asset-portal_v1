<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_users` WHERE `users_uid` = '$id' and is_deleted = '0'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $users_uid = $row['users_uid'];
    $emp_id = $row['emp_id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['username'];
    $password = decrypt($row['password']);
    $mobile_no = $row['mobile_no'];
    $email_address = $row['email_address'];
    $address1 = $row['address1'];
    $address2 = $row['address2'];
    $city = $row['city'];
    $country = $row['country'];
    $user_access = $row['user_access'];
    
    $data_arr[] = array("users_id" => $users_uid, "emp_id" => $emp_id, "firstname" => $firstname, "lastname" => $lastname, "username" => $username, "password" => $password, "mobile_no" => $mobile_no, "email_address" => $email_address, "address1" => $address1, "address2" => $address2, "city" => $city, "country" => $country, "user_access" => $user_access);
}
echo json_encode($data_arr);
?>