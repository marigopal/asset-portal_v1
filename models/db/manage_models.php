<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$models_uid = decrypt($_POST['models_uid']);
$models_name = $_POST['models_name'];
$img_name = $_POST['img_name'];
$uid = uniqid();
$uid = "MODL_" . $uid;
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_models`(`models_uid`, `models_name`, `models_image`) VALUES ('$uid','$models_name','$img_name')";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_models` SET `models_name`='$models_name',`models_image`='$img_name' WHERE `models_uid` = '$models_uid'";
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
    echo "[{\"modelname\":\"1\",\"modelname_id\":\"" . $uid . "\"}]";
} else {

    echo "[{\"modelname\":\"0\"}]";

}
?>