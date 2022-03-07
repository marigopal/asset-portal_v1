<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$locations_uid = decrypt($_POST['locations_uid']);
$locationsname = $_POST['locationsname'];
$location_manager = $_POST['location_manager'];
$location_address1 = $_POST['location_address1'];
$location_address2 = $_POST['location_address2'];
$location_city = $_POST['location_city'];
$location_state = $_POST['location_state'];
$countries = $_POST['countries'];
$location_zip = $_POST['location_zip'];
$img_name = $_POST['img_name'];
$uid = uniqid();
$uid = "LOC_" . $uid;
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_locations`(`location_uid`, `location_name`, `manager`, `addressline1`,"
            . " `addressline2`, `city`, `state`, `countries`, `zipcode`, `location_image`) "
            . "VALUES ('$uid','$locationsname','$location_manager','$location_address1','$location_address2',"
            . "'$location_city','$location_state','$countries','$location_zip','$img_name')";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_locations` SET `location_name`='$locationsname',`manager`='$location_manager',"
            . "`addressline1`='$location_address1',`addressline2`='$location_address2',`city`='$location_city',"
            . "`state`='$location_state',`countries`='$countries',`zipcode`='$location_zip',"
            . "`location_image`='$img_name' WHERE `location_uid` = '$locations_uid'";
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
    echo "1";
} else {

    echo "0";
}
?>