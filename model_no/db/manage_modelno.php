<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$modelno_uid = decrypt($_POST['modelno_uid']);
$model_name = $_POST['model_name'];
$model_number = $_POST['model_number'];
$img_name = $_POST['img_name'];
if ($modelno_uid == '') {
    $uid = uniqid();
    $modelno_uid = "MODLNO_" . $uid;
}
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_modelno`(`modelno_uid`, `model_name`, `model_number`, `modelno_image`) VALUES ('$modelno_uid','$model_name','$model_number',"
            . "'$img_name')";
    $status = "Create";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_modelno` SET `model_name` = '$model_name',`model_number`='$model_number',`modelno_image`='$img_name' WHERE `modelno_uid` = '$modelno_uid'";
    $status = "Update";
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
    $logs_query = "INSERT INTO `tbl_modelno_logs`(`done_on`, `done_by`, `modelno_id`, `action`, `remarks`) "
            . "VALUES (now(),'" . $_COOKIE['user_id'] . "','$modelno_uid','$status','')";
    if ($result_log = $con->query($logs_query)) {
        echo "[{\"model_no\":\"1\",\"model_no_id\":\"" . $modelno_uid . "\"}]";
    }
} else {

    echo "[{\"model_no\":\"0\"}]";
}
?>