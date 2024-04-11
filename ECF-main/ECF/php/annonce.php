<?php
session_start();
include_once "config.php";
$title = mysqli_real_escape_string($conn, $_POST['title']);
$prix = mysqli_real_escape_string($conn, $_POST['prix']);
$kilometre = mysqli_real_escape_string($conn, $_POST['kilometre']);
$annee = mysqli_real_escape_string($conn, $_POST['annee']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$status_id = 1;

if (!empty($title) && !empty($prix) && !empty($kilometre) && !empty($annee) && !empty($description)) {
    if (isset($_FILES['image'])) { //if file is uploaded
        $img_name = $_FILES['image']['name']; //getting user uploaded img name
        $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder

        //let's explode img and get the last extend like jpg png
        $img_explode = explode(".", $img_name);
        $img_ext = end($img_explode); //here we get thh extension fo the an user uploaded img file

        $extension = ['png', 'jpeg', 'jpg']; //these are some valid img ext and we've store them in array
        if (in_array($img_ext, $extension) === true) { //if user uploaded img ext is match witch any array extension
            $time = time();
            $new_img_name = $time . $img_name;

            move_uploaded_file($tmp_name, "images/" . $new_img_name);

            $sql2 = mysqli_query($conn, "INSERT INTO annonce (title, prix, kilometre, annee, description, img, status_id) VALUES ('{$title}', '{$prix}', '{$kilometre}', '{$annee}', '{$description}', '{$new_img_name}', '{$status_id}')");
            if ($sql2) {
                echo 'success';
            }
        } else {
            echo "Please select an Image File - jpeg, jpg, png";
        }
    } else {
        echo "Please select an Image file!";
    }
}
