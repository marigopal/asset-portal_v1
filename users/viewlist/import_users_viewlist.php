<?php
include '../../include/lib_page.php';
$sno = 0;
$status = 0;
$sql = "SELECT * from tbl_import_users WHERE is_deleted= '0'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row['users_uid']; ?></td>
            <td><?php echo $row['emp_id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php
                if ($row['status'] == 1) {
                    $status = $row['status'];
                    echo "Employee ID Duplicate";
                } else if ($row['status'] == 2) {
                    echo "Username Duplicate";
                    $status = $row['status'];
                }
                ?></td>
        </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?> 