<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT a.users_uid,a.emp_id,a.firstname,a.lastname,a.username,a.password,a.mobile_no,a.email_address,a.address1,a.address2,a.city,a.country,a.is_firstlogin,a.user_access,a.is_deleted,b.usraccess_uid,b.access_name FROM `tbl_users` a LEFT JOIN tbl_useraccess b on b.usraccess_uid = a.user_access WHERE a.is_deleted = '1' and a.username != 'Webadmin' ORDER BY a.firstname ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['users_uid']; ?></td>
            <td><?php echo $row['emp_id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['mobile_no']; ?></td>
            <td><?php echo $row['access_name']; ?></td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
