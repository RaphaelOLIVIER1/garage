<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}' ");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['unique_id'] = $row['unique_id'];
        $_SESSION['roles'] = $row['roles'];
        switch ($_SESSION['roles']) {
            case 1:
                echo 'administateur';
                break;
            case 2:
                echo 'moderateur';
                break;
            default:
                echo 'success';
        }
    } else {
        echo "Email or password is incorrect";
    }
} else {
    echo "All input field are required";
};
