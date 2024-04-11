<?php
include_once "../navigation/header.php";
include_once "../php/boutique.php";
?>


<main class="d-flex flex-column justify-content-center align-items-center">
    <section class="d-flex mt-5 p-0">
        <div class="search-panel d-sm-flex">
            <div class="global-1 m-2">
                <p><input type="range" class="form-range" id="price_range" min="0" max="200000" value="200000" name="prix">prix:</p>
            </div>
            <div class="global-2 m-2">
                <p><input type="range" class="form-range" id="kilometre_range" min="0" max="200000" value="200000" name="kilometre">kilometre:</p>
            </div>
            <div class="global-3 m-2">
                <p><input type="range" class="form-range" id="annee_range" min="1950" max="2024" value="2024" name="annee">année:</p>
            </div>
            <button onclick="filterProducts()" class="btn btn-outline-primary">Filter Products</button>
        </div>

    </section>
    <div id="productContainer" class="">
        <?php
        while ($row = mysqli_fetch_assoc($sql)) {
            $title = $row['title'];
            $prix = $row['prix'];
            $kilometre = $row['kilometre'];
            $annee = $row['annee'];
            $img = $row['img'];
            $description = $row['description'];
            $id = $row['id']
        ?>

            <article class="card my-5 list-annonce" style="width: 18rem;">
                <img class=" card-img card-img-top" src="../php/images/<?php echo $img; ?>" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $title; ?></h5>
                    <h5>Prix: <?php echo $prix; ?></h5>
                    <h5>Kilomètrage:<?php echo $kilometre; ?></h5>
                    <h5>Année: <?php echo $annee ?></h5>
                    <p class="border border-dark p-3 rounded"><?php echo $description ?></p>
                    <div class="btn btn-primary">
                        <a class="btn" href="article.php?id=<?php echo $id ?>">voir plus</a>
                    </div>
                </div>
            </article>
        <?php
        }
        ?>
    </div>
</main>
<script src="../javascript/boutique.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
include_once '../navigation/footer.php'
?>
</script>
</body>

</html>