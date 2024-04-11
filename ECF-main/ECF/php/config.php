<?php
$conn =  mysqli_connect("localhost", "root", "", "garage");
if (!$conn) {
    echo "Database connected" . mysqli_connect_error();
};


// $conn = new PDO('mysql:dbname=garages;host=localhost', 'root');