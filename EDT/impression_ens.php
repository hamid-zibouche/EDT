<?php 
session_start();
extract($_POST);
if(empty($s)){
    $s='s1';
}

extract($_SESSION);
include 'connexion.php' ;

?>
<?php
$id_ens=$_SESSION['id'];
$sql="SELECT * FROM enseignant WHERE id_ens=$id_ens";
$result=$db->prepare($sql);
$result->execute();
$enseignant=$result->fetchAll();
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
            
    
                <br>
                <h1>EMPLOIS TEMPS</h1>
                <p id="sem"><?php if($s=='s1'){ echo 'SEMESTRE 1';}else {echo 'SEMESTRE 2';}?></p>
                <p id="title">NOM : <span><?php echo $enseignant[0]['nom_ens']?></span>PRENOM :<span><?php echo $enseignant[0]['prenom_ens']?></span></p>
        </div>
  
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