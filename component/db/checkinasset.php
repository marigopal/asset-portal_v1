<?php

include('../../include/lib_page.php');
$compo_removeuid = $_POST['compo_removeuid'];

$update_query = "UPDATE `tbl_component` SET `assigned_user`= '0' ,`asset_assign`= '', `status_id` = 'STS_62074ed9870a4' WHERE `component_uid` ='$compo_removeuid'";
// echo $update_query;exit();
if ($result = $con->query($update_query)) {
    echo "1";
} else {

    echo "0";
}
?>
