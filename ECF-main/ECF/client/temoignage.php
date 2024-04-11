<?php
include_once "../navigation/header.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: ../client/inscription.php");
};
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
                <div>
                    <label for="">Rédiger votre message</label>
                    <textarea class="form-control d-flex-sm" id="temoignage" name="temoignage" rows="5" cols="30"></textarea>
                </div>
                <div class="form-floating my-3">
                    <input type="number" id="floatingInput" class="form-control d-flex-sm" name="note" max="10">
                    <p class="from-label"></p>
                    <label class="floatingInput" for="">note de 1 à 10</label>
                </div>
            </div>
            <div class="button button-primary m-3">
                <input type="submit" class="btn btn-primary" value="Valider le témoignage">
            </div>
        </form>
    </section>
</main>
<?php
include_once 'footer.php';
?>
<script src="./javascript/temoignage.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>