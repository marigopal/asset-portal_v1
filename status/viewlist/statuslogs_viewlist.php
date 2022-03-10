<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT a.statuslogs_uid,a.done_on,a.done_by,a.status_id,a.action,a.remarks,a.is_deleted,b.status_uid,b.status_name from tbl_status_logs a LEFT JOIN tbl_status b on b.status_uid = a.status_id WHERE a.is_deleted = '0' ORDER by a.done_on DESC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        $doneby = decrypt($row['done_by']);
        ?>
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['statuslogs_uid']; ?></td>
            <td><?php echo $row['done_on']; ?></td>
            <td><?php echo $row['status_name']; ?></td>
            <td><?php echo $row['action']; ?></td>
            <td><?php echo ${strtoupper($doneby) . 'firstname'} ?></td>
            
            
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
