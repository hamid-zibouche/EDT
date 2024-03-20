<?php 
session_start();
$utl='root';
$mdps='';
$chek=false;
$bdd= new PDO('mysql:host=localhost;dbname=gestion_emploie_du_temps;',$utl,$mdps);
if (isset($_POST['Ajouter'])) {
  if (!empty($_POST['nom'])){
    $lb=($_POST['nom']);
    $datd=($_POST['cycle']);
    $nb=($_POST['nbs']);
    

    $sql="INSERT INTO `formation` ( `nom_for`) VALUES ('$lb');";
    $insert=$bdd->prepare($sql);
    $insert->execute();
    $chek=true;
  }
  // else{
  //   echo "veuillez remplire tt les champs";
  // }
  if ($chek) {

    $message="inserted seccefuly";
  } // else {
  //    $_SESSION['notif']=" not inserted seccefuly";
     
  // }
  // echo $_SESSION['notif'];

}



?>
<!doctype html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="ajtformation.css?fooiyf">
  <title>Formation</title>
</head>
<body>
  <?php 
  include "nav_bar.php";
  ?>
 <div class="container">
  <div class="row">
    <div class="col-12 ">
    <?php if (isset($message)) { ?>
          <div class="alert alert-success" id="notif" role="alert">
            <?php  echo $message;?>
          </div> <?php }?>
      <form method="post">

        <h2>Ajouter une formation</h2>
        <input type="texte" name="nom" placeholder="libelle de la formation" id="nm" required>
        <select class="form-select" aria-label="Default select example" name="cycle" required>
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
        <input type="submit" name="Ajouter" value="Ajouter" id="ajt">
        <input type="submit" name="Annule" value="Annule" id="anl">
      </form>
      
    </div>

  </div>
</div>



</div>



<script src="../assets/js/bootstrap.bundle.min.js" ></script>
<script src="ajtformation.js?jffy"></script>

</body>
</html>