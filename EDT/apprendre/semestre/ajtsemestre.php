<?php 
session_start();
$utl='root';
$mdps='';
$chek=false;
$bdd= new PDO('mysql:host=localhost;dbname=gestion_emploie_du_temps;',$utl,$mdps);

  // else{
  //   $erreur= "veuillez remplire tt les champs";
  // }
  if ($chek) {

    $message="inserted seccefuly";
//   }else {
//    $_SESSION['notif']=" not inserted seccefuly";

//  }

extract($_GET);
}



?>

<!doctype html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="ajtsemestre.css?cnriix,">

  <title>Semestre</title>
</head>
<body>
  <?php include_once('nav_bar.php');?>
  <div class="container">
    <div class="row">
      <div class="col-12 ">
       
  <?php if (isset($_GET['message'])){if ($_GET['message']=='success') { ?>
          <div class="alert alert-success" id="notif" role="alert">
            <?php  echo 'AJOUT AVEC SUCCES';?>
          </div> <?php 
          }else{
            ?>
          <div class="alert alert-danger" id="notif" role="alert">
            <?php  echo 'AJOUT IMPOSSIBLE!!';?>
          </div><?php
          }}
          
          ?>
        <form method="post" action="ajout.php">
          <h2>Ajouter un Semestre</h2>
          <select class="form-select" aria-label="Default select example" name="libelle" required>
            <option value="" selected disabled>choisissez un semestre</option>
            <option value="s1">S1</option>
            <option value="s2">S2</option>
            <option value="s3">S3</option>
            <option value="s4">S4</option>
            <option value="s5">S5</option>
            <option value="s6">S6</option>
          </select>
          <input type="texte" name="datd" id="dtd" onfocus="this.type='date'" placeholder="date debut" required>
          <input type="texte" name="datf" id="dtf" onfocus="this.type='date' " placeholder="date fin" required>

          <select class="form-select" aria-label="Default select example" name="formation" required>
            <option value="" selected disabled>choisissez une formation</option>
            <?php
            $sql="select * from formation";
            $select=$bdd->prepare($sql);
            $select->execute(); 
            $formation=$select->fetchAll();

            foreach ($formation as $for) {
              ?>
              <option value="<?php echo $for['id_for']?>"> <?php echo $for['nom_for']?></option> 

            <?php } ?>

            ?>
            
          </select>
          <input type="submit" name="Ajouter" value="Ajouter" id="ajt">
          <input type="submit" name="Annule" value="Annule" id="anl">

        </form>
        
      </div>
   </div>
 </div>



</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="../assets/js/bootstrap.bundle.min.js" ></script>
<script src="ajts.js?jjiisg" ></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>
</html>