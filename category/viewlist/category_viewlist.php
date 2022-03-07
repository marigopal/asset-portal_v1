<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT a.category_uid,a.category_name,a.category_prefix,a.type,a.category_imagename,a.is_deleted,b.type_uid,b.type_name FROM tbl_category a INNER JOIN tbl_type b ON b.type_uid = a.type WHERE a.is_deleted = '0' ORDER BY b.type_name ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['category_uid']; ?></td>
            <td><?php echo $row['category_name']; ?></td>
            <td><?php echo $row['category_prefix']; ?></td>
            <td><?php echo $row['type_name']; ?></td>
            <td>
                <?php
                $category_uid_encrypt = encrypt($row['category_uid']);
                ?>
                <a href="../category/manage_category_form?id=<?php echo $category_uid_encrypt; ?>" ><i class="fas fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_modal_box" onclick="delete_row('<?= $row['category_uid']; ?>')"><i class="fas fa-trash-alt"></i></a>
            </td>
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?> 