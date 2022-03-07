<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT a.modelno_uid,a.model_name,a.model_number,a.modelno_image,a.is_deleted,b.models_uid,b.models_name,b.models_image,b.is_deleted FROM `tbl_modelno` a LEFT JOIN tbl_models b on b.models_uid = a.model_name WHERE a.is_deleted = '0' ORDER by b.models_name ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['modelno_uid']; ?></td>
            <td><?php echo $row['models_name']; ?></td>
            <td><?php echo $row['model_number']; ?></td>
            <td>
                <?php
                $modelno_uid_encrypt = encrypt($row['modelno_uid']);
                ?>
                <a href="../model_no/manage_modelno_form?id=<?php echo $modelno_uid_encrypt; ?>" ><i class="fas fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_modal_box" onclick="delete_row('<?= $row['modelno_uid']; ?>')"><i class="fas fa-trash-alt"></i></a>
            </td>
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?> 