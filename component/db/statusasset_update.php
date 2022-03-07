<?php

include('../../include/lib_page.php');
$statuschange_uid = $_POST['statuschange_uid'];
$statuslist_select = $_POST['statuslist_select'];
$statuschangetext = $_POST['statuschangetext'];
if($statuschangetext == 'Scrab')
{
    $deleted = '1';
}
else if($statuschangetext == 'Broken - Not Fixable')
{
    $deleted = '1';
}else if($statuschangetext == 'Lost/Stolen')
{
    $deleted = '1';
}else{$deleted = '0';}
$update_query = "UPDATE `tbl_component` SET `status_id`='$statuslist_select', `is_deleted`='$deleted' WHERE `component_uid` = '$statuschange_uid'";
// echo $update_query;exit();
if ($result = $con->query($update_query)) {
    echo "1";
} else {

    echo "0";
}
?>