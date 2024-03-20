<?php
require("connexion.php");
$id_for=$_GET['id_for'];
$resultat= $bdEmploiTemps->query("SELECT * from formation WHERE id_for=$id_for");
$tuple=$resultat->fetch();

if (isset($_POST['Ajouter'])& !empty($_POST)) {

$nomfor=$_POST['nom_for'];

$bdEmploiTemps->exec("UPDATE  formation SET nom_for='$nomfor' where id_for=$id_for");

header("location: viewformation.php");
} else {  
   $erreur="la mise à jour a échoué. ";
 }
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="formation/ajtformation.css">
  <title>Formation</title>
</head>
<body>
 <div class="container">
  <div class="row">
    <div class="col-12 ">
    <?php if (isset($message)) { ?>
          <div class="alert alert-success" id="notif" role="alert">
            <?php  echo $message;?>
          </div> <?php }?>
      <form action="" method="post">
            <!-- le cas ou il y'a une erreur
        <?php if (isset($erreur)) { ?>
          <div class="alert alert-danger" role="alert" >
            <?php  echo $erreur;?>
          </div> <?php }?> -->
        <h2>Modifier une formation</h2>
        <input type="texte" name="nom_for" placeholder="libelle de la formation" id="nm" required value="<?php  echo $tuple['nom_for']?>">
        <select class="form-select" aria-label="Default select example" name="cycle" required  >
          <option>Cycle</option>
          
          <option value="s1">Préparatoir</option>
          <option value="s2">Avance</option>
          
        </select>

        <select class="form-select" aria-label="Default select example" name="nbs" required>
          <option>Nombre de semestre</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <input type="submit" name="Ajouter" value="Valider modification" id="ajt">
        <div class="d-grid gap-2 mb-3"><a href="viewformation.php" style="text-decoration:none ;"> <button  type="button" class="btn btn-warning" name="Annule" id="anl"><a href="viewformation.php" style="text-decoration:none ; color:white; font-size:large;">Revenir à la liste</a></button></div>
        
      </form>
      
    </div>

  </div>
</div>



</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="../assets/js/bootstrap.bundle.min.js" ></script>
<script src="ajtformation.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>
</html>