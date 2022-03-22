<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT a.component_uid,a.asset_tag,a.assettag_number,a.warranty,a.inv_uid,a.category,a.manufacturer,a.model,a.model_no,a.serialno,a.remarks,a.`assigned_user`,a.asset_assign,a.status_id,h.users_uid,h.emp_id,h.username,h.firstname, a.is_deleted,b.category_uid,b.category_name,b.type,c.manufacturers_uid,c.manufacturers_name,d.models_uid,d.models_name,f.invoice_uid,f.invoice_date,f.invoice_no,g.type_uid,g.type_name,g.assign_method,i.status_uid,i.status_name,j.modelno_uid,j.model_number,k.asset_tag as asset_asigned FROM `tbl_component` a LEFT JOIN tbl_category b on b.category_uid = a.category LEFT JOIN tbl_manufacturers c ON c.manufacturers_uid = a.manufacturer LEFT JOIN tbl_models d on d.models_uid = a.model LEFT JOIN tbl_invoice f on f.invoice_uid = a.inv_uid INNER JOIN tbl_type g on g.type_uid = b.type LEFT JOIN tbl_users h on h.users_uid = a.`assigned_user` LEFT JOIN tbl_status i on i.status_uid = a.status_id LEFT JOIN tbl_modelno j on j.modelno_uid = a.model_no LEFT JOIN tbl_component k on k.component_uid = a.asset_assign WHERE  a.is_deleted = '1' order by f.invoice_date desc;";
// echo $sql;exit();
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>
        <tr>
            
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['component_uid']; ?></td>
            <td><?php echo $row['invoice_date']; ?></td>
            <td>
                <a href="../invoice/index?inv_id=<?php echo encrypt($row['invoice_uid']); ?>" ><?php echo $row['invoice_no']; ?></a>
            </td>
            <td>
                <a href="../component/comp_log?log_id=<?php echo encrypt($row['component_uid']); ?>" ><?php echo $row['asset_tag']; ?></a>
                    </td>
            <td><?php echo $row['category_name']; ?></td>
            <td><?php echo $row['manufacturers_name']; ?></td>
            <td><?php echo $row['models_name']; ?></td>
            <td><?php echo $row['model_number']; ?></td>
            <td><?php echo $row['serialno']; ?></td>
            <td><?php echo $row['status_name']; ?></td>
            <td><?php
                if ($row['firstname'] != '') {
                    echo $row['firstname']; echo "-"; echo $row['emp_id'];
                } 
                ?></td>
            <td><?php echo $row['asset_asigned']; ?></td>
            
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
