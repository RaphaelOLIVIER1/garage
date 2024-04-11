<?php
include_once '../navigation/header.php';
?>

<main class="d-flex flex-column justify-content-center align-items-center">
    <section class="m-3 d-flex justify-content-center form signup" style="width: 75vw ">
        <form action="" enctype="multipart/form-data" autocomplete="off">
            <div class="error-txt"></div>
            <input name="image" class="form-control m-3" type="file" accept="image/jpeg, image/png" multiple max="3">
            <div class="d-flex flex-column justify-content-around">
                <h3 class="d-flex ">Title: <input style="width: 50vw; max-width: 250px;" name="title" class="form-control d-sm mx-2" type="text"></h3>
                <h3>Prix: <input style="width: 50vw; max-width: 250px;" name="prix" class="form-control d-sm mx-2" type="number"></h3>
            </div>
            <div class="d-flex flex-column justify-content-around">
                <h3>Kilomètrage: <input style="width: 50vw; max-width: 250px;" name="kilometre" class="form-control d-sm mx-2" type="number"></h3>
                <h3>Année de circulation: <input style="width: 50vw; max-width: 250px;" name="annee" class="form-control d-sm mx-2" type="number"></h3>
                <h3>Description:</h3>
                <textarea style="resize: none;" name="description" cols="30" rows="10" class="m-2 border border-warning rounded p-2"></textarea>
            </div>
            <div class="button">
                <input type="submit" class="btn btn-primary" value="Valider l'annonce">
            </div>
        </form>
    </section>
</main>
<script src="../javascript/annonce.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php
include_once '../navigation/footer.php'
?>
</body>

</html>