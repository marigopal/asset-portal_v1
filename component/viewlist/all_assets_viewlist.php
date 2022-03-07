<?php
include '../../include/lib_page.php';
if (!empty($_POST['_id'])) {
    $_id = $_POST['_id'];

    $and = "and a.category = '$_id'";
} else {
    $and = "";
}
$sno = 0;
$sql = "SELECT a.component_uid,a.asset_tag,a.assettag_number,a.warranty,a.inv_uid,a.category,a.manufacturer,a.model,a.model_no,a.serialno,a.remarks,a.`assigned_user`,a.asset_assign,a.status_id,h.users_uid,h.emp_id,h.username,h.firstname, a.is_deleted,b.category_uid,b.category_name,b.type,c.manufacturers_uid,c.manufacturers_name,d.models_uid,d.models_name,f.invoice_uid,f.invoice_date,f.invoice_no,i.status_uid,i.status_name FROM `tbl_component` a LEFT JOIN tbl_category b on b.category_uid = a.category LEFT JOIN tbl_manufacturers c ON c.manufacturers_uid = a.manufacturer LEFT JOIN tbl_models d on d.models_uid = a.model LEFT JOIN tbl_invoice f on f.invoice_uid = a.inv_uid INNER JOIN tbl_type g on g.type_uid = b.type LEFT JOIN tbl_users h on h.users_uid = a.`assigned_user` LEFT JOIN tbl_status i on i.status_uid = a.status_id WHERE a.is_deleted = '0' $and order by f.invoice_date desc";
//$sql = "SELECT a.component_uid,a.asset_tag,a.assettag_number,a.warranty,a.inv_uid,a.category,a.manufacturer,a.model,a.model_no,a.serialno,a.remarks,a.`assigned_user`,a.asset_assign,a.status_id,h.users_uid,h.emp_id,h.username,h.firstname, a.is_deleted,b.category_uid,b.category_name,b.type,c.manufacturers_uid,c.manufacturers_name,d.models_uid,d.models_name,f.invoice_uid,f.invoice_date,f.invoice_no,i.status_uid,i.status_name FROM `tbl_component` a LEFT JOIN tbl_category b on b.category_uid = a.category LEFT JOIN tbl_manufacturers c ON c.manufacturers_uid = a.manufacturer LEFT JOIN tbl_models d on d.models_uid = a.model LEFT JOIN tbl_invoice f on f.invoice_uid = a.inv_uid INNER JOIN tbl_type g on g.type_uid = b.type LEFT JOIN tbl_users h on h.users_uid = a.`assigned_user` LEFT JOIN tbl_status i on i.status_uid = a.status_id WHERE a.is_deleted = '0' $and order by f.invoice_date desc";
//echo $sql;exit();
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr 
        <?php if ($row['assigned_user'] == '0') { ?>
                style="background: #a8ffcf;">
                    <?php } else if ($row['assigned_user'] != '') {
                    ?>
                >
            <?php } ?>        
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['component_uid']; ?></td>
            <td><?php echo $row['invoice_date']; ?></td>
            <td>
                <a href="../invoice/index?inv_id=<?php echo encrypt($row['invoice_uid']); ?>" ><?php echo $row['invoice_no']; ?></a>
            </td>
            <td><?php echo $row['asset_tag']; ?></td>
            <td><?php echo $row['category_name']; ?></td>
            <td><?php echo $row['manufacturers_name']; ?></td>
            <td><?php echo $row['models_name']; ?></td>
            <td><?php echo $row['model_number']; ?></td>
            <td><?php echo $row['serialno']; ?></td>
            <td><?php echo $row['warranty']; ?></td>
            <td><?php echo $row['status_name']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php
                if ($row['firstname'] != '') {
                    echo $row['firstname'];
                } else {
                    
                }
                ?></td>
            <td><?php echo $row['asset_assign']; ?></td>
            <td>
                <?php
                $component_uid_encrypt = encrypt($row['component_uid']);
                ?>
                <a href="../manage_asset/manage_asset_form?id=<?php echo $component_uid_encrypt; ?>" ><i class="fas fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#inv_update_modal" onclick="invoice_update('<?php echo $component_uid_encrypt; ?>');"><i class="fas fa-file-invoice" title="Invoice Update"></i></a>
                <?php if ($row['assigned_user'] == 0) { ?>
                    <a href="#" data-toggle="modal" data-target="#asset_assign_user_modal" onclick="assetassign('<?php echo $component_uid_encrypt; ?>');"><i class="fas fa-user" title="Checkout"></i></a>
        <?php } else if ($row['assigned_user'] != '') { ?>
                    <a href="#" data-toggle="modal" data-target="#checkinconfirm" onclick="checkinconfirm('<?= $row['component_uid']; ?>')"><i class="fas fa-user" title="Checkin"></i></a>
        <?php } ?>
                <a href="#" data-toggle="modal" data-target="#asset_statuschange_modal" onclick="statuschange_asset('<?= $row['component_uid']; ?>')"><i class="fas fa-trash"></i></a>
            </td>
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?> 