<?Php

if ($stmt = $connection->query("select b.category_name,COUNT(*) from tbl_component a LEFT JOIN tbl_category b on b.category_uid = a.category group by b.category_name;")) {

    $php_data_array = Array(); // create PHP array

    while ($row = $stmt->fetch_row()) {

        $php_data_array[] = $row; // Adding to array
    }
    
} else {
    echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 
//echo json_encode($php_data_array); 
// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = " . json_encode($php_data_array) . "
</script>";
?>