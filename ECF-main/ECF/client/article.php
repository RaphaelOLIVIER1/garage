<?php
include_once "../navigation/header.php";
$idannonce = $_GET['id'];
if (!empty($_GET['id'])) {
    $sql = mysqli_query($conn, "SELECT * FROM annonce WHERE id='{$idannonce}'");
    if ($sql) {
        $row = mysqli_fetch_assoc($sql);
    }
}

?>
<main class="m-5 d-flex flex-column justify-content-center align-items-center">
    <section class="m-5 d-flex flex-column justify-content-center align-items-center">
        <div class="d-sm-flex align-items-center mb-3 justify-content-center border border-dark rounded">
            <img class="img-fluid d-sm-block rounded" style="min-width: 100px; max-width: 50%;" src="../php/images/<?php echo $row['img'] ?>" alt="">
        </div>
    </section>
    <section style="width: 75vw" class="m-5 d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex justify-content-start my-2">
            <h3 class="mx-4">Title: <?php echo $row['title'] ?></h3>
            <h3 class="mx-4">Prix: <?php echo $row['prix'] ?>€</h3>
        </div>
        <div class="d-flex flex-column align-items-start">
            <h3 class="my-3">Kilomètrage: <?php echo $row['kilometre'] ?>km</h3>
            <h3 class="my-3">Année de circulation: <?php echo $row['annee'] ?></h3>
            <h3 class="my-3">Description:</h3>
            <p class="m-2 border border-warning rounded p-2"><?php echo $row['description'] ?></p>
        </div>
        <a class="btn btn-primary m-3" href="contact.php?id=<?php echo $idannonce ?>" type="submit">contacter</a>
    </section>
</main>
<?php
include_once "../navigation/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>