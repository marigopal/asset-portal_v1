<?php
include '../../include/lib_page.php';
if (!empty($_POST['_id'])) {
    $_id = decrypt($_POST['_id']);

    $and = "and a.compid = '$_id'";
} else {
    $and = "";
}
$sno = 0;
$sql = "SELECT a.complog_uid,a.assigned_date,a.compid,a.status,a.user,a.asset,a.done_by,a.done_on,b.asset_tag,c.asset_tag as assigned_asset FROM `tbl_comp_logs` a LEFT JOIN tbl_component b on b.component_uid = a.compid LEFT JOIN tbl_component c on c.component_uid = a.asset WHERE a.is_deleted = '0' $and ORDER by a.assigned_date DESC;";
// echo $sql;exit();
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>
        <tr>
            <td><?php echo $row['assigned_date']; ?></td>
            <td><?php echo $row['asset_tag']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php if ($row['user'] != '') {
            echo ${strtoupper($row['user']) . 'firstname'};
        } ?></td>
            <td><?php echo $row['assigned_asset']; ?></td>
            <td><?php if ($row['done_by'] != '') {
            echo ${strtoupper($row['done_by']) . 'firstname'};
        } ?></td>
            <td><?php echo $row['done_on']; ?></td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
