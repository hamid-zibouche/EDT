<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include 'connexion.php';

if($_SESSION['type']!='admin')
header('location:index.php');
include 'requets.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/EDT.css?reoiis">
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <title>Espace Administrateur</title>
</head>

<body>
    <input  id="sem" type="hidden" value="<?php echo $id_sem?>">
<?php include "nav_bar.php"; ?>
    <header>
        <h1 onclick="generateurpdf()">Créer un Emplois du Temps</h1>
        <p>FORMATION : <span><?php echo $for[0]['nom_for']?></span>SEMESTRE : <span id='sem'><?php echo $sem[0]['lib_sem']?></span>SECTION : <span>section <?php echo $sec[0]['lib_sec']?></span> GROUPE : <span><?php echo $grp[0]['lib_grp']?></span></p>
        <button id="preced" onclick="history.back()">Précedent</button>
    </header>
    <main>
        <table id="table">
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
            <tr>
                    <td class="jour">
                        <p> SAMEDI</p>
                    </td>
                    <?php $jour='samedi'; 
                    include 'jours.php';
                    ?>
            </tr>
            <tr>
                    <td class="jour">
                        <p> DIMANCHE</p>
                    </td>
                    <?php $jour='dimanche'; 
                    include 'jours.php';
                    ?>
            </tr>
            <tr>
                    <td class="jour">
                        <p> LUNDI</p>
                    </td>
                    <?php $jour='lundi'; 
                    include 'jours.php';
                    ?>
            </tr>
            <tr>
                    <td class="jour">
                        <p> MARDI</p>
                    </td>
                    <?php $jour='mardi'; 
                    include 'jours.php';
                    ?>
            </tr>
            <tr>
                    <td class="jour">
                        <p> MERCREDI</p>
                    </td>
                    <?php $jour='mercredi'; 
                    include 'jours.php';
                    ?>
            </tr>
            <tr>
                    <td class="jour">
                        <p> JEUDI</p>
                    </td>
                    <?php $jour='jeudi'; 
                    include 'jours.php';
                    ?>
            </tr>
    
            </tbody>
        </table>
    </main>
    <div class='action'>
    <button id="clear" style='opacity:0;'>Clear</button>
    <a class='save' href="view_EDT.php?groupe=<?php echo $groupe?>">Save</a>
    </div>
    <footer>
        <p> Université de Bejaia 2022/2023 .tous les droits resérvés.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="JS/js.js?aizi"></script>
    <script src="JS/imprimer.js"></script>
</body>

</html>