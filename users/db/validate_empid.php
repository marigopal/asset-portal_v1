<?php
include('../../include/lib_page.php');
$query = "SELECT count(*) as cntUser FROM `tbl_assetmodel` where model = '$model' and manufacturer = '$manufacturer' and model_no = '$model_no' and is_deleted = '0';";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row['cntUser'] > 0) {
    echo "1";
} else {
echo "0";    
}
?>
