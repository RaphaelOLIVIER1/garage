<?php
include_once "../php/config.php";
$sql = mysqli_query($conn, "SELECT * FROM annonce WHERE status_id = '1' ORDER BY id DESC");
