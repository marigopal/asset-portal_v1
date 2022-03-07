<?php
include '../../include/lib_page.php';
$sno = 0;
if (!empty($_POST['filter'])) 
{
    $filter = decrypt($_POST['filter']);
    $and = "and a.invoice_uid = '$filter'";
    
} else {
    $and="";
}
$sql = "SELECT a.invoice_uid,a.invoice_date,a.invoice_no,a.supplier,a.purchase_date,a.purchase_no,a.purchase_cost,a.`inv_filename`,a.is_deleted,b.supplier_uid,b.supplier_name FROM `tbl_invoice` a LEFT JOIN tbl_supplier b on b.supplier_uid = a.supplier WHERE a.is_deleted = '0' $and ORDER BY a.invoice_date DESC";
//echo $sql;exit();
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>
        <tr data-widget="expandable-table" aria-expanded="false" class="thead-dark" style="background: #91bbff;">
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['invoice_uid']; ?></td>
            <td><?php echo $row['invoice_date']; ?></td>
            <td>
                <a href="../component/index?id=<?php echo $row['invoice_no']; ?>" ><?php echo $row['invoice_no']; ?></a>
            </td>
            <td><?php echo $row['supplier_name']; ?></td>
            <td><?php echo $row['purchase_date']; ?></td>
            <td><?php echo $row['purchase_no']; ?></td>
            <td><?php echo $row['purchase_cost']; ?></td>
            <td>
                <?php if ($row['inv_filename'] != '') { ?>
                    <a href="../image_location/<?php echo $row['inv_filename']; ?>" target="blank"><i class="fas fa-download"></i></a>
                <?php } ?>
            </td>
            <td>
                <?php
                $invoice_uid_encrypt = encrypt($row['invoice_uid']);
                ?>
                <a href="../invoice/update?id=<?php echo $invoice_uid_encrypt; ?>" ><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        <tr class="expandable-body d-none">
            <td style="width:auto;" colspan="7"><p>
                <table class="table table-bordered table-striped pl-0">
                    <thead>
                        <tr>
                            <th hidden="">ID</th>
                            <th>#</th>
                            <th>Asset Tag</th>
                            <th>Category</th>
                            <th>Manufacturer</th>
                            <th>Model</th>
                            <th>Warranty</th>
                            <th>Serial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno1 = 0;
                        $inv_id = $row['invoice_uid'];
                        $sub_sql = "SELECT a.component_uid,a.asset_tag,a.assettag_number,a.warranty,a.inv_uid,a.category,a.manufacturer,a.model,a.model_no,a.serialno,a.remarks,a.is_deleted,b.category_uid,b.category_name,c.manufacturers_uid,c.manufacturers_name,d.models_uid,d.models_name,e.modelno_uid,e.model_number FROM `tbl_component` a Left JOIN tbl_category b on b.category_uid = a.category left JOIN tbl_manufacturers c ON c.manufacturers_uid = a.manufacturer left JOIN tbl_models d on d.models_uid = a.model left JOIN tbl_modelno e on e.modelno_uid = a.model_no WHERE a.is_deleted = '0' and a.inv_uid = '$inv_id' ORDER BY a.category ASC";
                        $subresult = $con->query($sub_sql);
                        if ($subresult->num_rows > 0) {
                            while ($subrow = $subresult->fetch_array(MYSQLI_BOTH)) {
                                ?>	
                                <tr  style="background:white;">
                                    <td style="width:auto;" hidden=""><p><?php echo $subrow['component_uid']; ?></p></td>
                                    <td style="width:auto;"><p><?php echo ++$sno1; ?></p></td>
                                    <td style="width:auto;"><p><?php echo $subrow['asset_tag']; ?></p></td>
                                    <td style="width:auto;"><p><?php echo $subrow['category_name']; ?></p></td>
                                    <td style="width:auto;" ><p><?php echo $subrow['manufacturers_name']; ?></p></td>
                                    <td style="width:auto;"><p><?php echo $subrow['models_name']; ?></p></td>
                                    <td style="width:auto;"><p><?php echo $subrow['warranty']; ?></p></td>
                                    <td style="width:auto;"><p><?php echo $subrow['serialno']; ?></p></td>
                                </tr>   
                                <?php
                            }
                        }
                        ?> 
                    </tbody>
                </table>
            </p></td>
        </tr>   
        <?php
    }
}
mysqli_close($con);
?> 