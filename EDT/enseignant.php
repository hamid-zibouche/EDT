<?php 
session_start();
extract($_GET);
if(empty($s)){
    $s='s1';
}
extract($_SESSION);
include 'connexion.php' ;
if($_SESSION['type']!='ens')
header('location:index.php');
?>
<?php
$id_ens=$_SESSION['id'];
$sql="SELECT * FROM enseignant WHERE id_ens=$id_ens";
$result=$db->prepare($sql);
$result->execute();
$enseignant=$result->fetchAll();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/view_EDT_ens.css?ksh">
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <title>Espace Enseignants</title>
</head>

<body>
    <?php include 'nav_bar_ens.php';?>
    <header>
        <div class="impression" ><i title="TELECHARGER EDT" id='print'class="fas fa-print" ></i></div>
        <h1>EMPLOIS TEMPS</h1>
        <p id="sem"><?php if($s=='s1'){ echo 'SEMESTRE 1';}else {echo 'SEMESTRE 2';}?></p>
        <p id="title">NOM : <span><?php echo $enseignant[0]['nom_ens']?></span>PRENOM :<span><?php echo $enseignant[0]['prenom_ens']?></span></p>
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
                include 'jour_emplois_ens.php';
            ?>
            </tbody>
        </table>
        <script src="JS/font-awesome.js?ii"></script>
        <script src="js/imprimer_ens.js?jiop"></script>
        <script src="./JS/./biblio_pdf.js?ii"></script>


</body>

</html>