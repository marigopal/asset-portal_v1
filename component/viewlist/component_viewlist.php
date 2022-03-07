<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT a.component_uid,a.asset_tag,a.assettag_number,a.warranty,a.inv_uid,a.category,a.manufacturer,"
        . "a.model,a.model_no,a.serialno,a.remarks,a.is_deleted,b.category_uid,b.category_name,b.type,"
        . "c.manufacturers_uid,c.manufacturers_name,d.models_uid,d.models_name,e.modelno_uid,"
        . "e.model_number,f.invoice_uid,f.invoice_no,f.invoice_date FROM `tbl_component` a "
        . "LEFT JOIN tbl_category b on b.category_uid = a.category "
        . "LEFT JOIN tbl_manufacturers c ON c.manufacturers_uid = a.manufacturer "
        . "LEFT JOIN tbl_models d on d.models_uid = a.model "
        . "LEFT JOIN tbl_modelno e on e.modelno_uid = a.model_no "
        . "LEFT JOIN tbl_invoice f on f.invoice_uid = a.inv_uid "
        . "INNER JOIN tbl_type g on g.type_uid = b.type"
        . " WHERE a.is_deleted = '0' and b.type = '3' ORDER BY f.invoice_date ASC";
//echo $sql;exit();
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['component_uid']; ?></td>
            <td><?php echo $row['invoice_no']; ?></td>
            <td><?php echo $row['asset_tag']; ?></td>
            <td><?php echo $row['category_name']; ?></td>
            <td><?php echo $row['manufacturers_name']; ?></td>
            <td><?php echo $row['models_name']; ?></td>
            <td><?php echo $row['model_number']; ?></td>
            <td><?php echo $row['serialno']; ?></td>
            <td><?php echo $row['warranty']; ?></td>
            <td>
                <?php
                $component_uid_encrypt = encrypt($row['component_uid']);
                ?>
                <a href="../manage_asset/manage_asset_form?id=<?php echo $component_uid_encrypt; ?>&redirect_url=component" ><i class="fas fa-edit"></i></a>
                <a href="../manage_asset/manage_asset_form?id=<?php echo $component_uid_encrypt; ?>" ><i class="fas fa-file-invoice" title="Invoice Update"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_modal_box" onclick="delete_row('<?= $row['component_uid']; ?>')"><i class="fas fa-trash-alt"></i></a>
            </td>
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?> 