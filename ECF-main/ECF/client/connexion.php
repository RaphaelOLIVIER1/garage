<?php
require_once "header.php";

?>
<main class=" m-5 d-flex flex-column justify-content-center align-items-center">
    <section class="login">
        <form action="#" class="mt-5">
            <div class="error-txt"></div>
            <h1>connexion</h1>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Entrer votre email">
            </div>
            <div class="field input">
                <label for="" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Entrer mot de passe">
                <i class="fas fa-eye"></i>
            </div>
            <div class="m-2 button">
                <input type="submit" class="btn btn-primary" value="Continuer l'incription">
            </div>
        </form>
        <div class="link mb-5">Not yet signed up? <a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="incription.php">Signup now</a></div>
</main>
</section>
<?php
include_once "footer.php"
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="javascript/login.js"></script>
</body>

</html>