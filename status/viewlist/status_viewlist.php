<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT * FROM `tbl_status` WHERE is_deleted = '0' ORDER BY `seq_id` ASC;";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['status_uid']; ?></td>
             <td><?php echo $row['status_name']; ?></td>
            <td>
                <?php
                $status_uid_encrypt = encrypt($row['status_uid']);
                if($row['editable'] != '1'){
                ?>
                <a href="../status/manage_status_form?id=<?php echo $status_uid_encrypt; ?>" ><i class="fas fa-edit"></i></a>
                
                <a href="#" data-toggle="modal" data-target="#delete_modal_box" onclick="delete_row('<?= $row['status_uid']; ?>')"><i class="fas fa-trash-alt"></i></a>
                <?php }?>
            </td>
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?> 