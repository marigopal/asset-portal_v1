<?php

include('../../include/lib_page.php');
$model_name = $_POST['model_name'];
$model_number = $_POST['model_number'];
$query = "SELECT count(*) as cntUser FROM `tbl_modelno` where model_number = '$model_number' and model_name = '$model_name' and is_deleted = '0';";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row['cntUser'] > 0) {
    echo "1";
} else {
    echo "0";
}
?>