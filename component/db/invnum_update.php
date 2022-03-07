<?php

include('../../include/lib_page.php');
$invupd_comid = decrypt($_POST['invupd_comid']);
$invupd_invno = $_POST['invupd_invno'];

$update_query = "UPDATE `tbl_component` SET `inv_uid`= '$invupd_invno' WHERE `component_uid` ='$invupd_comid'";
// echo $update_query;exit();
if ($result = $con->query($update_query)) {
    echo "1";
} else {

    echo "0";
}
?>