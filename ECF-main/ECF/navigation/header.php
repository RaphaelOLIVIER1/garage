<?php
session_start();
include_once "../php/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/filtre-slider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#horraire').DataTable();
        });
    </script>
</head>

<body class="d-flex flex-column">
    <header class="d-block mb-2">
        <nav class="p-3 navbar navbar-expand-lg bg-dark fixed-top navbar-dark">
            <div class="container">
                <a href="../client/index.php" class="navbar-brand"><img src="../img/Capture_d_écran_2024-02-02_213253-removebg-preview.png" alt="error"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="../client/boutique.php" class="nav-link">
                                Boutique
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../client/contact.php" class="nav-link">
                                Contacte
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../client/profile.php" class="nav-link">
                                Profil
                            </a>
                        </li>
                        <?php
                        if (isset($_SESSION['roles'])) {
                            if ($_SESSION['roles'] == 1) {

                        ?>
                                <li class="nav-item">
                                    <a href="../admin/acceuil.php" class="nav-link">
                                        Administrateur
                                    </a>
                                </li>
                        <?php
                            }
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['roles'])) {
                            if ($_SESSION['roles'] == 2 || $_SESSION['roles'] == 1) {
                        ?>
                                <li class="nav-item">
                                    <a href="../employer/acceuil.php" class="nav-link">
                                        Moderation
                                    </a>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>