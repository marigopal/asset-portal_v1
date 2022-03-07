<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$modelno_uid = decrypt($_POST['modelno_uid']);
$model_name = $_POST['model_name'];
$model_number = $_POST['model_number'];
$img_name = $_POST['img_name'];
$uid = uniqid();
$uid = "MODLNO_" . $uid;
if ($isNew === 'true') {
    $sql = "INSERT INTO `tbl_modelno`(`modelno_uid`, `model_name`, `model_number`, `modelno_image`) VALUES ('$uid','$model_name','$model_number',"
            . "'$img_name')";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_modelno` SET `model_name` = '$model_name',`model_number`='$model_number',`modelno_image`='$img_name' WHERE `modelno_uid` = '$modelno_uid'";
}
//echo $sql;exit();
if ($result = $con->query($sql)) {
    echo "[{\"model_no\":\"1\",\"model_no_id\":\"" . $uid . "\"}]";
} else {

    echo "[{\"model_no\":\"0\"}]";
}
?>