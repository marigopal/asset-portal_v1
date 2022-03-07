<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_company` WHERE `is_deleted` = '0' AND `company_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $company_uid = $row['company_uid'];
    $company_name = $row['company_name'];
    $company_imagename = $row['company_imagename'];
    $data_arr[] = array("company_uid " => $company_uid, "company_name" => $company_name, "company_imagename" => $company_imagename);
}
echo json_encode($data_arr);
?>