<?php
require "../core/sidebar.php";
require "../../config/db.php";

$get = "SELECT * FROM tbl_tabungan";
$result = mysqli_query($db, $get);

?>
    <div class="container">
        <table>
            <tr>
                <th>Tanggal</th>
                <th>Nominal:</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row['tanggal']?></td>
                <td><?php echo $row['nominal']?></td>
            </tr>
            <?php } ?>
        </table>
    </div>