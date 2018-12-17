<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 7 exercice 3</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 7 exercice 3</h1>
                    <h3 align="center">Exercice 3</h3>
                    <p align="center">Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
                </div>
            </div>
            <p align="center"><a href="index.php">Retour sur la page index.php</a></p>
            <?php
            echo $_GET['prenom'];
            if (isset($_GET['Nom']) AND isset($_GET['Prenom'])) { // On teste si les paramètres nom et prénom sont bien présent et si oui, on les affiche en echo ci-dessous
                echo '<p align="center">Ton nom est: "<b>' . $_GET['Nom'] . '</b>"  et ton prénom est: "<b>' . $_GET['Prenom'] . '</b>".</p>';
            } else { // s'il nous manque un paramètre, on affiche l'echo ci-dessous
                echo '<p align="center">Désolé, il manque un paramètre !</p>';
            }
            ?>
        </div>
    </body>
</html>