<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT * FROM `tbl_supplier` WHERE is_deleted = '0' ORDER BY supplier_name ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['supplier_uid']; ?></td>
            <td><?php echo $row['supplier_name']; ?></td>
            <td><?php echo $row['supplier_address1'] . $row['supplier_address2']; ?></td>
            <td><?php echo $row['supplier_contactname']; ?></td>
            <td><?php echo $row['supplier_email']; ?></td>
            <td><?php echo $row['supplier_phone']; ?></td>
            <td>
                <?php
                $supplier_uid_encrypt = encrypt($row['supplier_uid']);
                ?>
                <a href="../suppliers/manage_suppliers_form?id=<?php echo $supplier_uid_encrypt; ?>" ><i class="fas fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_modal_box" onclick="delete_row('<?= $row['supplier_uid']; ?>')"><i class="fas fa-trash-alt"></i></a>
            </td>
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?> 