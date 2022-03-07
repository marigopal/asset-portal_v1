<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_manufacturers` WHERE `is_deleted` = '0' AND `manufacturers_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $manufacturers_uid = $row['manufacturers_uid'];
    $manufacturers_name = $row['manufacturers_name'];
    $manufacturers_url = $row['manufacturers_url'];
    $manufacturers_supporturl = $row['manufacturers_supporturl'];
    $manufacturers_supportphone = $row['manufacturers_supportphone'];
    $manufacturers_supportemail = $row['manufacturers_supportemail'];
    $manufacturers_image = $row['manufacturers_image'];
    $data_arr[] = array("manufacturers_uid " => $manufacturers_uid, "manufacturers_name" => $manufacturers_name, "manufacturers_url" => $manufacturers_url, "manufacturers_supporturl" => $manufacturers_supporturl, "manufacturers_supportphone" => $manufacturers_supportphone, "manufacturers_supportemail" => $manufacturers_supportemail, "manufacturers_image" => $manufacturers_image);
}
echo json_encode($data_arr);
?>