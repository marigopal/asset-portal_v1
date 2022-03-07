<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT * FROM `tbl_manufacturers` WHERE is_deleted = '0' ORDER BY manufacturers_name ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['manufacturers_uid']; ?></td>
            <td><?php echo $row['manufacturers_name']; ?></td>
            <td>
                <?php
                if ($row['manufacturers_image'] != '') {
                    ?>
                    <a href="../image_location/<?php echo $row['manufacturers_image']; ?>" target="_blank">
                        <img src="../image_location/<?php echo $row['manufacturers_image']; ?>" alt="" width="30" height="20" id="receipt_display">
                    </a>
                <?php } ?>
            </td>
            <td><?php echo $row['manufacturers_url']; ?></td>
            <td><?php echo $row['manufacturers_supporturl']; ?></td>
            <td><?php echo $row['manufacturers_supportphone']; ?></td>
            <td><?php echo $row['manufacturers_supportemail']; ?></td>
            <td>
                <?php
                $manufacturers_uid_encrypt = encrypt($row['manufacturers_uid']);
                ?>
                <a href="../manufacturers/manage_manufacturers_form?id=<?php echo $manufacturers_uid_encrypt; ?>" ><i class="fas fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#delete_modal_box" onclick="delete_row('<?= $row['manufacturers_uid']; ?>')"><i class="fas fa-trash-alt"></i></a>
            </td>
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?> 