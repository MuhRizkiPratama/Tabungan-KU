<?php
    require "../../config/db.php";
    require "../core/sidebar.php";
?>
    <div class="form">
        <h3>Tabungan</h3>
        <form action="backend/proses.php" method="post">
            <div class="tanggal">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" required>
            </div>
            <div class="nominal">
                <label for="nominal">Nominal:</label>
                <input type="number" name="nominal" id="nominal" required>
            </div>
            <button class="btn" type="submit" name="Submit">Submit</button>
        </form>
    </div>