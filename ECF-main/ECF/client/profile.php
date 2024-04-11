<?php
include_once "../navigation/header.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: incription.php");
};
?>
<link rel="stylesheet" href="css/style.css">
<main>
    <section class="container d-flex justify-content-center align-items-center">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if (mysqli_num_rows($sql) > 0) {
            $rows = mysqli_fetch_assoc($sql);
        }
        ?>
        <div class="m-5 border border-black rounded p-3 align-items-center d-flex flex-column">
            <img class="image-fluid rounded" style="height: 100px;" src="../php/images/<?php echo $rows['img'] ?>" alt="">
            <div class="detail m-2">
                <span class="m-1"><?php echo $rows['fname'] . " " . $rows['lname'] ?></span>
                <p><?php echo $rows['status'] ?></p>
            </div>
        </div>
    </section>
</main>

<?php
include_once "../navigation/footer.php"
?>