
<?php

include('../../include/lib_page.php');
$inv_uid = $_POST['inv_uid'];
$asset_category = $_POST['asset_category'];
$asset_category_name = $_POST['asset_prefix'];
$warranty = $_POST['warranty'];
$location = $_POST['location'];
$pod = $_POST['pod'];
if($pod == '')
{
    $pod = '0000-00-00';
}else{
$pod = date("Y-m-d", strtotime($pod));}
$pon = $_POST['pon'];
$poc = $_POST['poc'];
$supplier = $_POST['supplier'];
$invdate = $_POST['invdate'];
$invdate = date("Y-m-d", strtotime($invdate));
$invno = $_POST['invno'];
$manufacturer = $_POST['manufacturer'];
$asset_model = $_POST['asset_model'];
$asset_modelno = $_POST['asset_modelno'];
$img_name = $_POST['img_name'];

if ($inv_uid == '') {
    $uid = uniqid();
    $inv_uid = "INV_" . $uid;
    $inv_query = "INSERT INTO `tbl_invoice` (`invoice_uid`, `invoice_date`, `invoice_no`, `supplier`, "
            . "`purchase_date`, `purchase_no`, `purchase_cost`, `inv_filename`) VALUES ('$inv_uid','$invdate','$invno','$supplier',"
            . "'$pod','$pon','$poc','$img_name')";
            // echo $inv_query; exit();
    $statement = $connect->prepare($inv_query);

    $statement->execute();
    $result = $statement->fetchAll();
}

$get_maxasset_no = "SELECT Max(assettag_number) as new_assettag_number FROM `tbl_component` where category = '$asset_category'";
$result = mysqli_query($con, $get_maxasset_no);
$data_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $new_assettag_number = $row['new_assettag_number'];
    if ($new_assettag_number == null) {
        $new_assettag_number = 0;
    }
}
if (isset($_POST["serial"])) {
    for ($count = 0; $count < count($_POST["serial"]); $count++) {
        $new_assettag_number = $new_assettag_number + 1;
        $asset_tag = invoice_num($new_assettag_number, 7, "$asset_category_name");
        $comp_uid = uniqid();
        $component_uid = "COMP_" . $comp_uid;
        $serial = $_POST["serial"][$count];
        $remarks = $_POST["remarks"][$count];
        $query = "INSERT INTO `tbl_component`(`component_uid`, `inv_uid`, `asset_tag`, `assettag_number`, `warranty`, `category`, `manufacturer`, `model`, `model_no`, `location`, `status_id`, "
                . "`serialno`, `remarks`) VALUES ('$component_uid','$inv_uid',"
                . "'$asset_tag','$new_assettag_number','$warranty','$asset_category','$manufacturer',"
                . "'$asset_model','$asset_modelno','$location','STS_6226dd403f9ac','$serial', '$remarks')";

        $statement = $connect->prepare($query);
        $statement->execute();
    }
    $result = $statement->fetchAll();
    if (isset($result)) {
        echo '1';
    }
} else {
    echo "2";
}

function invoice_num($input, $pad_len = 7, $prefix = null) {
    if ($pad_len <= strlen($input))
        trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);
    if (is_string($prefix))
        return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));
    return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
}

?>
