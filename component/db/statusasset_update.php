<?php

include('../../include/lib_page.php');
$statuschange_uid = $_POST['statuschange_uid'];
$statuslist_select = $_POST['statuslist_select'];
$statuschangetext = $_POST['statuschangetext'];
$usr = decrypt($_COOKIE['user_id']);
if($statuschangetext == 'Scrap')
{
    $deleted = '1';
}
else if($statuschangetext == 'Lost/Stolen')
{
    $deleted = '1';
}else{$deleted = '0';}
$update_query = "UPDATE `tbl_component` SET `status_id`='$statuslist_select', `is_deleted`='$deleted' WHERE `component_uid` = '$statuschange_uid'";
// echo $update_query;exit();
if ($result = $con->query($update_query)) {
    $insert_userlog = "INSERT INTO `tbl_comp_logs`(`assigned_date`, `compid`, `status`, `done_by`, `done_on`) "
                . "VALUES (now(),'$statuschange_uid','$statuschangetext','$usr',now())";
        if ($result = $con->query($insert_userlog)) {
            
        }
    echo "1";
} else {

    echo "0";
}
?>