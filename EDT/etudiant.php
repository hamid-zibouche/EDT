<?php 
session_start();
include 'connexion.php';
if($_SESSION['type']!='etd')
header('location:index.php');

$id=$_SESSION['id'];
$sql="SELECT * FROM etudiant where id_etd='$id'";
$result=$db->prepare($sql);
$result->execute();
$etudiants=$result->fetchAll();
$id_groupe=$etudiants[0]['id_grp'];
$nom_etd=$etudiants[0]['nom_etd'];
$prenom_etd=$etudiants[0]['prenom_etd'];

$groupe=$id_groupe;

?>

<?php
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
    <link rel="stylesheet" href="style/view_EDT_etd.css?iyiy">
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <title>Espace Etudiant</title>
</head>
<?php include 'nav_bar_etd.php'; ?>
<body>

<input type="hidden" id="groupe" name="groupe" value="<?php echo $groupe?>">

   
    
    <main id="main">
    <header>
        <div class="impression"><i id='print'class="fas fa-print" ></i></div>
        <h1>Emplois du Temps</h1>
        <p id="nomprenom">NOM: <span><?php echo $nom_etd ?></span> PRENOM: <span><?php echo $prenom_etd?></span></p>
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
    </main>
    <script src="./JS/./biblio_pdf.js?prii"></script>
    <script src="JS/font-awesome.js?iid"></script>
    <script src="js/imprimer.js?jiuf"></script>
</body>
</html>