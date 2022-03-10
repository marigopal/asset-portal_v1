<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT a.modelslogs_uid,a.done_on,a.done_by,a.model_id,a.action,a.remarks,a.is_deleted,b.models_uid,b.models_name FROM `tbl_models_logs` a LEFT JOIN tbl_models b on b.models_uid = a.model_id WHERE a.is_deleted = '0' ORDER BY a.done_on DESC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        $doneby = decrypt($row['done_by']);
        ?>
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['statuslogs_uid']; ?></td>
            <td><?php echo $row['done_on']; ?></td>
            <td><?php echo $row['models_name']; ?></td>
            <td><?php echo $row['action']; ?></td>
            <td><?php echo ${strtoupper($doneby) . 'firstname'} ?></td>
            
            
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
