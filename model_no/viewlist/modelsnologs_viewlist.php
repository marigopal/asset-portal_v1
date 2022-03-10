<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT a.modelnologs_uid,a.done_on,a.done_by,a.modelno_id,a.action,a.remarks,a.is_deleted,b.modelno_uid,b.model_name,b.model_number,c.models_uid,c.models_name FROM `tbl_modelno_logs` a LEFT JOIN tbl_modelno b on b.modelno_uid = a.modelno_id LEFT JOIN tbl_models c on c.models_uid = b.model_name WHERE a.is_deleted = '0' ORDER by a.done_on DESC";
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
            <td><?php echo $row['model_number']; ?></td>
            <td><?php echo $row['action']; ?></td>
            <td><?php echo ${strtoupper($doneby) . 'firstname'} ?></td>
            
            
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
