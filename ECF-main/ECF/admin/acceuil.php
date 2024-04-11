<?php
include_once '../navigation/header.php';

?>

<main class="m-5 d-flex flex-column align-items-center">
    <section class="d-flex justify-content-center form signup">
        <div class="container bg-secondary rounded text-light">
            <form>
                <div class="error-txt"></div>
                <h1>horraire</h1>
                <div class="p-2">
                    lundi: <input name="lundi_m" class="form-control" type="time"> à <input name="lundi_s" class="form-control" type="time">
                </div>
                <div class="p-2">
                    mardi: <input class="form-control" name="mardi_m" type="time"> à <input name="mardi_s" class="form-control" type="time">
                </div>
                <div class="p-2">
                    mercredi: <input class="form-control" name="mercredi_m" type="time"> à <input name="mercredi_s" class="form-control" type="time">
                </div>
                <div class="p-2">
                    jeudi: <input class="form-control" name="jeudi_m" type="time"> à <input name="jeudi_s" class="form-control" type="time">
                </div>
                <div class="p-2">
                    vendredi: <input class="form-control" name="vendredi_m" type="time"> à <input name="vendredi_s" class="form-control" type="time">
                </div>
                <div class="p-2">
                    samedi: <input class="form-control" name="samedi_m" type="time"> à <input name="samedi_s" class="form-control" type="time">
                </div>
                <div class="button">
                    <input class="btn btn-primary m-2" type="submit" value="Validation des horaire">
                </div>
            </form>
        </div>
    </section>
    <section class="m-3">
        <div class="p-5 bg-secondary rounded d-flex flex-column align-items-center">
            <h1>Création de compte moderation</h1>
            <a href="incription_moderateur.php" class="rounded-pill bg-dark p-4 m-2 link-underline link-underline-opacity-0 link-light"><span class="">+</span></a>
        </div>

    </section>
</main>

<script src="../javascript/horraire.js"></script>
<?php
include_once '../navigation/footer.php'
?>
</body>

</html>