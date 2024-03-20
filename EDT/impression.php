
<?php 
extract($_GET);
include 'connexion.php';
extract($_POST);
include 'requets.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/view_EDT_etd_P.css?iy">
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <title>Espace Etudiant</title>
</head>

<div  id="container_p">
    <header id="title_P">
        <div id="univ"> 
             <p id="logo_P"> logo universite</p>
            <p>RÉPUBLIQUE ALGÉRIENNE DÉMOCRATIQUE ET POPULAIRE</p>
            <p>MINISTÈRE DE LA RECHERCHE SCIENTIFIQUE ET DE L'ENSEIGNEMENT SUPÉRIEUR</p>
            <p>université abderrahmane mira de Béjaïa</p>
            <p>faculté des sciences exactes: départeement d'informatique</p>
        </div>
        <h1>Emplois du Temps</h1>
        
        <p id ="title">FORMATION : <span><?php echo $for[0]['nom_for']?></span>SEMESTRE : <span><?php echo $sem[0]['lib_sem']?></span>SECTION : <span>section <?php echo $sec[0]['lib_sec']?></span> GROUPE : <span><?php echo $grp[0]['lib_grp']?></span></p>
    </header>
    <table id = "table">
            <thead>
                <th></th>
                <th class="heur">08:00 - 09:00</th>
                <th class="heur">09:10 - 10:10</th>
                <th class="heur">10:20 - 11:20</th>
                <th class="heur">11:30 - 12:30</th>
                <th class="heur">12:40 - 13:40</th>
                <th class="heur">13:50 - 14:50</th>
                <th class="heur">15:00 - 16:00</th>
            </thead>
            <tbody>
            <?php
            include "jour_emplois.php";
            ?>
            </tbody>
        </table>
    </div>
   