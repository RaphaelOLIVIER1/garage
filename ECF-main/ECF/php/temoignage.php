<?php
session_start();
include_once 'config.php';
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$temoignage = mysqli_real_escape_string($conn, $_POST['temoignage']);
$note = mysqli_real_escape_string($conn, $_POST['note']);



if (!empty($lname) && !empty($fname) && !empty($temoignage)) {
    $sql2 = mysqli_query($conn, "INSERT INTO temoignage (lname, fname, temoignage, note) VALUES ('{$lname}','{$fname}','{$temoignage}', '{$note}')");
    if ($sql2) {
        echo 'success';
    } else {
        echo 'error sql';
    }
} else {
    echo 'error if()';
}

// $sql = mysqli_query($conn, "TRUNCATE TABLE horraire_matin");