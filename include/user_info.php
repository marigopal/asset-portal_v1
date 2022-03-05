<?php

$sqlname1 = "SELECT * FROM `tbl_users`";
$resultname1 = mysqli_query($con, $sqlname1);
while ($rowname1 = mysqli_fetch_assoc($resultname1)) {
    ${strtoupper($rowname1['users_uid']) . 'emp_id'} = $rowname1['emp_id'];
    ${strtoupper($rowname1['users_uid']) . 'firstname'} = $rowname1['firstname'];
    ${strtoupper($rowname1['users_uid']) . 'lastname'} = $rowname1['lastname'];
    ${strtoupper($rowname1['users_uid']) . 'username'} = $rowname1['username'];
    ${strtoupper($rowname1['users_uid']) . 'mobile_no'} = $rowname1['mobile_no'];
    ${strtoupper($rowname1['users_uid']) . 'email_address'} = $rowname1['email_address'];
    ${strtoupper($rowname1['users_uid']) . 'address1'} = $rowname1['address1'];
    ${strtoupper($rowname1['users_uid']) . 'address2'} = $rowname1['address2'];
    ${strtoupper($rowname1['users_uid']) . 'city'} = $rowname1['city'];
    ${strtoupper($rowname1['users_uid']) . 'country'} = $rowname1['country'];
    ${strtoupper($rowname1['users_uid']) . 'is_firstlogin'} = $rowname1['is_firstlogin'];
    ${strtoupper($rowname1['users_uid']) . 'user_access'} = $rowname1['user_access'];
}
?>
