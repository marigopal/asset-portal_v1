<?php

include('../../include/lib_page.php');
$cate_prefix = $_POST['cate_prefix'];
$query = "SELECT count(*) as cntUser FROM `tbl_category` where category_prefix = '$cate_prefix' and is_deleted = '0';";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row['cntUser'] > 0) {
    echo "1";
} else {
    echo "0";
}
?>