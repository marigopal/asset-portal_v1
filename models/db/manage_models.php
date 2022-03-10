<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$models_uid = decrypt($_POST['models_uid']);
$models_name = $_POST['models_name'];
$img_name = $_POST['img_name'];
if($models_uid == ''){
$uid = uniqid();
$models_uid = "MODL_" . $uid;
}
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_models`(`models_uid`, `models_name`, `models_image`) VALUES ('$models_uid','$models_name','$img_name')";
    $status = "Create";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_models` SET `models_name`='$models_name',`models_image`='$img_name' WHERE `models_uid` = '$models_uid'";
    $status = "Update";
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
    $logs_query = "INSERT INTO `tbl_models_logs`(`done_on`, `done_by`, `model_id`, `action`, `remarks`) VALUES (now(),'" . $_COOKIE['user_id'] . "','$models_uid','$status','')";
    if ($result_log = $con->query($logs_query)) {
        echo "[{\"modelname\":\"1\",\"modelname_id\":\"" . $models_uid . "\"}]";
    }
} else {

    echo "[{\"modelname\":\"0\"}]";

}
?>