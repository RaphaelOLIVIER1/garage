<?php
include_once '../navigation/header.php';
$sql = mysqli_query($conn, "SELECT * FROM contact");
$count = 0;
?>
<main class="d-flex align-items-center justify-content-center mt-3">
    <section class="container m-4 d-flex align-items-center justify-content-center">
        <div class="container m-4 d-flex align-items-center justify-content-center" style="flex-wrap: wrap;">
            <?php
            while ($row = mysqli_fetch_assoc($sql)) {
                $lname = $row['lname'];
                $fname = $row['fname'];
                $email = $row['email'];
                $telephone = $row['telephone'];
                $object = $row['object'];
                $message = $row['message'];
                $id = $row['id'];

                $count++;

            ?>
                <article class="m-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title m-1 fw-bold"><?php echo $lname ?></h5>
                            <h5 class="card-title m-1 fw-bold"><?php echo $fname ?></h5>
                            <h5 class="card-subtitle m-1 fs-6"><?php echo $email ?></h5>
                            <h5 class="card-subtitle m-1 fs-6"><?php echo $telephone ?></h5>
                            <h6 class="card-subtitle m-2 mb-2 ">Objet: <?php echo $object ?> </h6>
                            <p class="card-text">Message: <?php echo $message ?></p>
                            <div class="field button">
                                <button type="button" class="btn btn-danger m-2" value="supprimer" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $count ?>">supprimer</button>
                            </div>
                        </div>
                    </div>
                </article>


                <!-- Modal -->
                <div class="modal fade" id="deleteModal<?php echo $count ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression De Message</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                êtes-vous sûr???
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="../php/supp_message.php?id=<?php echo $id ?>" class="btn btn-danger">Supprimer</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
</main>
<?php
include_once '../navigation/footer.php'
?>