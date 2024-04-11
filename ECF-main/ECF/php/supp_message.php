<?php
include_once '../php/config.php';
$idMessage = $_GET['id'];

if (!empty($_GET['id'])) {
    var_dump($_GET['id']);
    $sql = mysqli_query($conn, "DELETE FROM contact WHERE id='{$idMessage}'");

    header('Location:../employer/message.php');
}
