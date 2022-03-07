<?php

include('../../include/lib_page.php');
$id = decrypt($_POST['id']);
$sql = "SELECT * FROM `tbl_locations` WHERE `is_deleted` = '0' AND `location_uid` = '$id'";
$result = mysqli_query($con, $sql);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $location_uid = $row['location_uid'];
    $location_name = $row['location_name'];
    $manager = $row['manager'];
    $addressline1 = $row['addressline1'];
    $addressline2 = $row['addressline2'];
    $city = $row['city'];
    $state = $row['state'];
    $countries = $row['countries'];
    $zipcode = $row['zipcode'];
    $location_image = $row['location_image'];
    $data_arr[] = array("location_uid " => $location_uid, "location_name" => $location_name, "manager" => $manager, "addressline1" => $addressline1, "addressline2" => $addressline2, "city" => $city, "state" => $state, "countries" => $countries, "zipcode" => $zipcode, "location_image" => $location_image);
}
echo json_encode($data_arr);
?>