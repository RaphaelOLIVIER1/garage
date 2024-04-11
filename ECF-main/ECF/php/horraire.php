<?php
session_start();
include_once 'config.php';
$lundi_m = mysqli_real_escape_string($conn, $_POST['lundi_m']);
$mardi_m = mysqli_real_escape_string($conn, $_POST['mardi_m']);
$mercredi_m = mysqli_real_escape_string($conn, $_POST['mercredi_m']);
$jeudi_m = mysqli_real_escape_string($conn, $_POST['jeudi_m']);
$vendredi_m = mysqli_real_escape_string($conn, $_POST['vendredi_m']);
$samedi_m = mysqli_real_escape_string($conn, $_POST['samedi_m']);

$lundi_s = mysqli_real_escape_string($conn, $_POST['lundi_s']);
$mardi_s = mysqli_real_escape_string($conn, $_POST['mardi_s']);
$mercredi_s = mysqli_real_escape_string($conn, $_POST['mercredi_s']);
$jeudi_s = mysqli_real_escape_string($conn, $_POST['jeudi_s']);
$vendredi_s = mysqli_real_escape_string($conn, $_POST['vendredi_s']);
$samedi_s = mysqli_real_escape_string($conn, $_POST['samedi_s']);



if (!empty($lundi_m) && !empty($mardi_m) && !empty($mercredi_m) && !empty($jeudi_m) && !empty($vendredi_m) && !empty($samedi_m)) {
    if (!empty($lundi_s) && !empty($mardi_s) && !empty($mercredi_s) && !empty($jeudi_s) && !empty($vendredi_s) && !empty($samedi_s)) {
        $sqlsupprime1 = mysqli_query($conn, "TRUNCATE TABLE horraire_matin");
        $sqlsupprime2 = mysqli_query($conn, "TRUNCATE TABLE horraire_soir");
        $sql2 = mysqli_query($conn, "INSERT INTO horraire_matin (lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('{$lundi_m}','{$mardi_m}','{$mercredi_m}','{$jeudi_m}','{$vendredi_m}','{$samedi_m}')");
        $sql3 = mysqli_query($conn, "INSERT INTO horraire_soir (lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('{$lundi_s}','{$mardi_s}','{$mercredi_s}','{$jeudi_s}','{$vendredi_s}','{$samedi_s}')");
        if ($sql2 && $sql3) {
            echo 'success';
        } else {
            echo 'error sql';
        }
    }
} else {
    echo 'error if()';
}

// $sql = mysqli_query($conn, "TRUNCATE TABLE horraire_matin");