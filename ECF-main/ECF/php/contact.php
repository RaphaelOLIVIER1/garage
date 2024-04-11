<?php
session_start();
include_once 'config.php';
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
$object = mysqli_real_escape_string($conn, $_POST['object']);
$message = mysqli_real_escape_string($conn, $_POST['message']);



if (!empty($lname) && !empty($fname) && !empty($email) && !empty($telephone) && !empty($object) && !empty($message)) {
    $sql2 = mysqli_query($conn, "INSERT INTO contact (lname, fname, email, telephone, object, message) VALUES ('{$lname}','{$fname}','{$email}','{$telephone}','{$object}','{$message}')");
    if ($sql2) {
        echo 'success';
    } else {
        echo 'error sql';
    }
} else {
    echo 'error if()';
}

// $sql = mysqli_query($conn, "TRUNCATE TABLE horraire_matin");