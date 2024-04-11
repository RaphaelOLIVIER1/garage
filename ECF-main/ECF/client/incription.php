<?php
include_once "../navigation/header.php";
?>
<main class="m-5 d-flex flex-column justify-content-center align-items-center">
    <section class="form signup">
        <form action="#" enctype="multipart/form-data" class="mt-5" autocomplete="off">
            <div class="error-txt"></div>
            <h1>Inscription</h1>
            <div class="name-detail">
                <div class="field input">
                    <label class="form-label">Prénom</label>
                    <input class="form-control" type="text" name="fname" placeholder="Prénom" required>
                </div>
                <div class="field input">
                    <label class="form-label" for="">Nom</label>
                    <input class="form-control" type="text" placeholder="Nom" name="lname" required>
                </div>
            </div>
            <div class="field input">
                <label class="form-label" for="">Email</label>
                <input class="form-control" type="text" placeholder="Entrer votre email" name="email" required>
            </div>
            <div class="field input">
                <label class="form-label" for="">Mot de passe</label>
                <input class="form-control" type="password" placeholder="Entrer mot de passe" name="password" required>
            </div>
            <div class="field input">
                <label class="form-label" for="">Select Image</label>
                <input class="form-control" type="file" placeholder="image" name="image">
            </div>
            <div class="field button">
                <input class="btn btn-primary m-2" type="submit" value="Continuer l'incription">
            </div>
        </form>
        <div class="link mb-5">Already signed up?<a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="connexion.php">login now</a></div>
    </section>
</main>
<?php
include_once "../navigation/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="../javascript/inscription.js"></script>
</body>

</html>