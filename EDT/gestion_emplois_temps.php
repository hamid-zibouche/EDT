<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include 'connexion.php';

if ($_SESSION['type'] != 'admin')
    header('location:index.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/gestions_edt.css ?asoldit">
    <link rel="icon" href="img/favicon.ico" type="image/png">

    <title>Espace Administrateur</title>
</head>

<body>
<div class="client-fenetre-confirmation">
                    <div class="boite">
                        <div class="boite-header">
                            <span class="titre">Confirmation suppression</span>
                            <span class="fermer">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="message">
                            <i class='fas fa-exclamation-triangle'></i>
                            <p class="text">Voulez-vous vraiment vider le plannig du  ??</p>
                        </div>
                        <div class="boite-btns">
                            <button class="oui">Oui</button>
                            <button class="annuler">Annuler</button>
                        </div>
                    </div>
                </div>

<?php include "nav_bar.php"; ?>

    <main>
    <header>
        <h1 onclick="generateurpdf()">Gestion des Emplois du Temps</h1>
        
    </header>
    <?php if (isset($_GET['message'])){
    ?>
        <div class="alert" role="alert">
            <p>Suppression avec Success <i class="fa fa-check-circle" aria-hidden="true"></i></p>
        </div>
    <?php
     }else{
         ?>
         <a class="alert" style="display : none"></a>
         <?php
     }
     ?>
        <table id="table">
            <thead>
                <th class="titre">Formation</th>
                <th class="titre">Semestre</th>
                <th class="titre">Session</th>
                <th class="titre">Section</Section></th>
                <th class="titre">Groupe</th>
                <th class="titre">Action</th>
            </thead>
            <tbody>
                <?php include 'gestions.php'?>
            </tbody>
        </table>
    </main>
    <script src="./JS/./font-awesome.js"></script>
    <script src="JS/gestion_edt.js?iii"></script>
    <script src="JS/imprimer.js"></script>
</body>

</html>