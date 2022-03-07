<?php

include('../../include/lib_page.php');
$models_name = $_POST['models_name'];
$query = "SELECT count(*) as cntUser FROM `tbl_models` where models_name = '$models_name' and is_deleted = '0';";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row['cntUser'] > 0) {
    echo "1";
} else {
    echo "0";
}
?>