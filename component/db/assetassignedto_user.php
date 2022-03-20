<?php

include('../../include/lib_page.php');
$compo_uid = decrypt($_POST['compo_uid']);
$user = $_POST['user'];

if($user == '')
{
    $user = 0;
}
$asset_assign_list = $_POST['asset_assign_list'];
$update_query = "UPDATE `tbl_component` SET `assigned_user`='$user', `status_id`='STS_620be5e16097b', `asset_assign`='$asset_assign_list' WHERE `component_uid` ='$compo_uid'";
//echo $update_query;
if ($result = $con->query($update_query)) {
    echo "1";
} else {

    echo "0";
}
?>
