<?php
while ($row = mysqli_fetch_assoc($sql)) {
    $output .= '
    <article class="card my-5" style="width: 18rem;"  content">
    <img class="card-img card-img-top" src="./php/images/' . $row['img'] . '"  alt="">
    <div class="card-body">
    <h5 class="card-title">' . $row['title'] . '</h5>
    <h5>Prix:' . $row['prix'] . '</h5>
    <h5>Kilomètrage: <p id="kilometre">' . $row['kilometre'] . '<p></h5>
    <h5>Année:' . $row['annee'] . ' </h5>
    <p>Ceci est un message test</p>
    </div>
    </article>';
}

// img src="php/images/' . $rows['img'] . '" alt="">