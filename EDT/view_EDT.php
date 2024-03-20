
<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

if($_SESSION['type']!='admin')
header('location:index.php');

extract($_GET);
?>

<?php
include 'connexion.php';
include 'requets.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/view_EDT.css?rs">
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <title>Espace Administrateur</title>
</head>
<body>
    <?php include 'nav_bar.php'; ?>
    <header>
        <h1>Emplois du Temps</h1>
        <p>FORMATION : <span><?php echo $for[0]['nom_for']?></span>SEMESTRE : <span><?php echo $sem[0]['lib_sem']?></span>SECTION : <span>section <?php echo $sec[0]['lib_sec']?></span> GROUPE : <span><?php echo $grp[0]['lib_grp']?></span></p>
        <button id="preced" onclick="history.back()">Précedent</button>
    </header>
    <main>
        <table>
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
    </main>
        
</body>
</html>