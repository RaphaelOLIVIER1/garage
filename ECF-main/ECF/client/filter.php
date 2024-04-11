<?php
if (isset($_POST['price_range']) && isset($_POST['kilometre_range']) && isset($_POST['annee_range'])) {

    // Include database configuration file 
    include_once "../php/config.php";

    // Set conditions for filter by price range 
    $whereSQL = '';
    $priceRange = $_POST['price_range'];
    $kilometreRange = $_POST['kilometre_range'];
    $anneeRange = $_POST['annee_range'];
    if (!empty($priceRange) && !empty($kilometreRange) && !empty($anneeRange)) {
        $whereSQL = "WHERE prix BETWEEN '0' AND '" . $priceRange . "' AND kilometre BETWEEN '0' AND '" . $kilometreRange . "' AND annee BETWEEN '0' AND '" . $anneeRange . "'";
        $orderSQL = " ORDER BY prix ASC ";
    } else {
        $orderSQL = " ORDER BY id DESC ";
    }

    // Fetch matched records from database 
    $query = $conn->query("SELECT * FROM annonce $whereSQL $orderSQL");

    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {

            $title = $row['title'];
            $prix = $row['prix'];
            $kilometre = $row['kilometre'];
            $annee = $row['annee'];
            $img = $row['img'];
            $description = $row['description'];
            $id = $row['id']
?>

            <article class="card my-5 list-annonce" style="width: 18rem;">
                <img class=" card-img card-img-top" src="../php/images/<?php echo $row['img']; ?>" alt="">
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
    } else {
        echo '<p>Product(s) not found...</p>';
    }
}
?>