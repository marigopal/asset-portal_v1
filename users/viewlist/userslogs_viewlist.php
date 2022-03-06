<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT a.userslogs_uid,a.done_on,a.done_by,a.action,a.user_id,a.remarks,a.is_deleted,b.users_uid,b.emp_id,b.firstname,b.lastname,b.username FROM `tbl_users_log` a LEFT JOIN tbl_users b on b.users_uid = a.user_id WHERE a.`is_deleted` = '0' ORDER BY `done_on` DESC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        $doneby = decrypt($row['done_by']);
        ?>
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['userslogs_uid']; ?></td>
            <td><?php echo $row['done_on']; ?></td>
            <td><?php echo $row['emp_id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['action']; ?></td>
            <td><?php echo ${strtoupper($doneby) . 'firstname'} ?></td>
            
            
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
