<?php

include('../../include/lib_page.php');
$isNew = $_POST['isNew'];
$comp_uid = decrypt($_POST['comp_uid']);
$category = $_POST['category'];
$asset_category_name = $_POST['asset_category_name'];
$asset_category_name_ = strtoupper(substr($asset_category_name, 0, 3));
$warranty = $_POST['warranty'];
$manufacturer = $_POST['manufacturer'];
$model = $_POST['model'];
$serial = $_POST['serial'];
$remarks = $_POST['remarks'];


$uid = uniqid();
$uid = "COMP_" . $uid;
if ($isNew === 'true') {
    $get_maxasset_no = "SELECT Max(assettag_number) as new_assettag_number FROM `tbl_component` where category = '$category'";
    $result = mysqli_query($con, $get_maxasset_no);
    $data_arr = array();
    while ($row = mysqli_fetch_array($result)) {
        $new_assettag_number = $row['new_assettag_number'];
        if ($new_assettag_number == null) {
            $new_assettag_number = 0;
        }
    }
    $new_assettag_number = $new_assettag_number + 1;
    $asset_tag = invoice_num($new_assettag_number, 7, "$asset_category_name_");
    
    $sql = "INSERT INTO `tbl_component`(`component_uid`, `asset_tag`, `assettag_number`, "
            . "`warranty`, `category`, `manufacturer`, `model`, `serialno`, "
            . "`remarks`) VALUES ('$uid','$asset_tag','$new_assettag_number','$warranty','$category','$manufacturer',"
            . "'$model','$serial','$remarks')";
} else if ($isNew === 'false') {
    $sql = "UPDATE `tbl_component` SET `warranty`='$warranty',`category`='$category',"
            . "`manufacturer`='$manufacturer',`model`='$model',`serialno`='$serial',"
            . "`remarks`='$remarks' WHERE `component_uid` = '$comp_uid'";
}
// echo $sql;exit();
if ($result = $con->query($sql)) {
    echo "1";
} else {

    echo "0";
}

function invoice_num($input, $pad_len = 7, $prefix = null) {
    if ($pad_len <= strlen($input))
        trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);
    if (is_string($prefix))
        return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));
    return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
}
?>