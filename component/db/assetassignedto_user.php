<?php

include('../../include/lib_page.php');
$compo_uid = decrypt($_POST['compo_uid']);
$user = $_POST['user'];
$usr = decrypt($_COOKIE['user_id']);
if ($user == '') {
    $user = 0;
}
$asset_assign_list = $_POST['asset_assign_list'];
$update_query = "UPDATE `tbl_component` SET `assigned_user`='$user', `status_id`='STS_620be5e16097b', `asset_assign`='$asset_assign_list' WHERE `component_uid` ='$compo_uid'";
//echo $update_query;
if ($result = $con->query($update_query)) {
    if ($user != '' && $user != 0) {
        $insert_userlog = "INSERT INTO `tbl_comp_logs`(`assigned_date`, `compid`, `status`, `user`, `done_by`, `done_on`) "
                . "VALUES (now(),'$compo_uid','AssignUser','$user','$usr',now())";
        if ($result = $con->query($insert_userlog)) {
            
        }
    }
    if ($asset_assign_list != '') {
        $insert_assetlog = "INSERT INTO `tbl_comp_logs`(`assigned_date`, `compid`, `status`, `asset`, `done_by`, `done_on`) "
                . "VALUES (now(),'$compo_uid','AssignAsset','$asset_assign_list','$usr',now())";
        if ($result = $con->query($insert_assetlog)) {
            
        }
    }
    echo "1";
} else {

    echo "0";
}
?>
