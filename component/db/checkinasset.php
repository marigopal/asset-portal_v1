<?php

include('../../include/lib_page.php');
$compo_removeuid = $_POST['compo_removeuid'];
$compo_removeuser = $_POST['compo_removeuser'];
$usr = decrypt($_COOKIE['user_id']);
if($compo_removeuser == '')
{
    $compo_removeuser = '0';
}
$compo_removeasset = $_POST['compo_removeasset'];

$update_query = "UPDATE `tbl_component` SET `assigned_user`= '0' ,`asset_assign`= '', `status_id` = 'STS_6226dd403f9ac' WHERE `component_uid` ='$compo_removeuid'";
// echo $update_query;exit();
if ($result = $con->query($update_query)) {
    if ($compo_removeuser != '' && $compo_removeuser != 0) {
        $insert_userlog = "INSERT INTO `tbl_comp_logs`(`assigned_date`, `compid`, `status`, `user`, `done_by`, `done_on`) "
                . "VALUES (now(),'$compo_removeuid','UnAssignUser','$compo_removeuser','$usr',now())";
        if ($result = $con->query($insert_userlog)) {
            
        }
    }
    if ($compo_removeasset != '') {
        $insert_assetlog = "INSERT INTO `tbl_comp_logs`(`assigned_date`, `compid`, `status`, `asset`, `done_by`, `done_on`) "
                . "VALUES (now(),'$compo_removeuid','UnAssignAsset','$compo_removeasset','$usr',now())";
        if ($result = $con->query($insert_assetlog)) {
            
        }
    }
    echo "1";
} else {

    echo "0";
}
?>
