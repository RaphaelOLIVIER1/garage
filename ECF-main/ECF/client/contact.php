<?php
include_once "../navigation/header.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: incription.php");
};

if (isset($_GET['id'])) {
    $idannonce = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT title FROM annonce WHERE id='{$idannonce}'");
    if (isset($sql)) {
        $row = mysqli_fetch_assoc($sql);
        $title = $row['title'];
    }
}
?>


<main class="m-5 d-flex justify-content-center align-items-center ">
    <section class="card text-bg-secondary form signup">
        <form action="#" class="d-flex flex-column align-items-center">
            <div class="error-txt"></div>
            <h1 class="fs-2 mt-2 card-title">Contact</h1>
            <div class="card-body m-2 d-flex flex-column align-items-center justify-content-center">
                <div class="form-floating mb-3">
                    <input type="text" id="floatingInput" class="form-control d-flex-sm" name="lname" max="10">
                    <label class="floatingInput" for="lname">Nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" id="floatingInput" class="form-control d-flex-sm" name="fname" max="10">
                    <label class="floatingInput" for="fname">Prénom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" id="floatingInput" class="form-control d-flex-sm" name="email">
                    <label class="floatingInput" for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" id="floatingInput" class="form-control d-flex-sm" name="telephone">
                    <label class="floatingInput" for="telephone">Numéro de téléphone</label>
                </div>
                <article class="d-flex flex-column m-3">
                    <label for="">objet:</label>
                    <?php
                    if (isset($sql)) { ?>
                        <input type="text" value="<?php echo  $title  ?>" name="object" class="form-control" />
                    <?php
                    } else {
                        echo '<input name="object" class="form-control" type="text">';
                    }

                    ?>
                </article>
                <article class="d-flex flex-column m-3">
                    <label for="">Rédiger votre message</label>
                    <textarea class="form-control" id="story" name="message" rows="5" cols="30"></textarea>
            </div>
            </article>
            <div class="m-2 button">
                <input type="submit" class="btn btn-primary" value="Continuer l'incription">
            </div>
        </form>
    </section>
</main>
<script src="../javascript/contact.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php
include_once '../navigation/footer.php';
?>

</body>

</html>