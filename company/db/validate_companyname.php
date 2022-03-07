<?php

include('../../include/lib_page.php');
$companyname = $_POST['companyname'];
$query = "SELECT count(*) as cntUser FROM `tbl_company` where company_name = '$companyname' and is_deleted = '0';";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($row['cntUser'] > 0) {
    echo "1";
} else {
    echo "0";
}
?>