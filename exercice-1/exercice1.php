<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/exercice-1/public/assets/css/style.css">
    <title>Exercice 1</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-secondary d-flex">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">Les paramètres d'URL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav fs-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/exercice-1/exercice1.php">Exercice 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-2/exercice2.php">Exercice 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-3/index.php">Exercice 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-4/index.php">Exercice 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-5/index.php">Exercice 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-6/index.php">Exercice 6</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center p-5">Exercice 1</h1>
                <p class="text-center fs-4">Faire une page index.php. <br>
                    Dans cette page, écrire un lien qui renvoie vers <strong>index.php?lastname=Nemare&firstname=Jean</strong> <br>
                    Tester sur cette page que tous les paramètres de cette URL existent et dans ce cas, les afficher.</p>
            </div>
        </div>
    </div>
    <hr class="border border-4 border-dark">
    <main>
        <div>
            <!-- lastname et firstname = nom du paramètre / Nemare et Jean = valeur du paramètre -->
            <a href="exercice1.php?lastname=Nemare&firstname=Jean">exercice1.php?lastname=Nemare&firstname=Jean</a>
            <?php
            // la fonction isset teste si une variable existe
            if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
                // variable pour récupérer et stocker le nom des paramètres et leur valeur
                $lastname = $_GET['lastname'];
                $firstname = $_GET['firstname']; ?>
                <p> <?php echo 'Les paramètres lastname et/ou firstname existent' ?> </p>
                <!-- on fait appel aux variables ici  -->
                <p> <?php var_dump($lastname) ?> </p>
                <p> <?php var_dump($firstname) ?> </p>
            <?php } else { ?>
                <p> <?php echo 'Les paramètres lastname et/ou firstname n\'existent pas' ?> </p>
            <?php }
            ?>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>