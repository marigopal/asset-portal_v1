<?php

include('../../include/lib_page.php');
$delete_id = $_POST['uid'];
$delete_query = "UPDATE `tbl_supplier` SET `is_deleted`='1' WHERE `supplier_uid` = '$delete_id'";
if ($result = $con->query($delete_query)) {
    echo "1";
} else {
    echo "0";
}
?>