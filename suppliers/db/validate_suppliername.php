<?php

include('../../include/lib_page.php');
$suppliername = $_POST['suppliername'];
$query = "SELECT count(*) as cntUser FROM `tbl_supplier` where supplier_name = '$suppliername' and is_deleted = '0';";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row['cntUser'] > 0) {
    echo "1";
} else {
    echo "0";
}
?>