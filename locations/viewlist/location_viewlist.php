<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT * FROM `tbl_locations` WHERE is_deleted = '0' ORDER BY location_name ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['location_uid']; ?></td>
            <td><?php echo $row['location_name']; ?></td>
            <td>
                <?php
                $loc_uid_encrypt = encrypt($row['location_uid']);
                ?>
                <a href="../locations/manage_location_form?id=<?php echo $loc_uid_encrypt; ?>" ><i class="fas fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_modal_box" onclick="delete_row('<?= $row['location_uid']; ?>')"><i class="fas fa-trash-alt"></i></a>
            </td>
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?> 