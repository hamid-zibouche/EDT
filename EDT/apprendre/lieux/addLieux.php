<?php 
session_start();
$utl='root';
$mdps='';
$chek=false;
$bdd= new PDO('mysql:host=localhost;dbname=gestion_emploie_du_temps;',$utl,$mdps);

if (isset($_POST['Ajouter'])) {

  if (($_POST['type']=='salle_td' or $_POST['type']=='salle_tp') and !empty($_POST['block'])   and !empty($_POST['Libelle'])){
    $typ=($_POST['type']);
    $bl=($_POST['block']);
    $lb=($_POST['Libelle']);
    
 

    $sql="INSERT INTO `lieux` ( `lib_lieux`, `type`, `block`) VALUES ( '$lb', '$typ', '$bl');";
    $insert=$bdd->prepare($sql);
    $insert->execute();
    $chek=true;
  }
    

    if ($_POST['type']=='amphi' and !empty($_POST['Libelle'])){
      $typ=($_POST['type']);
      $lb=($_POST['Libelle']);

      $sql="INSERT INTO `lieux` ( `lib_lieux`, `type`, `block`) VALUES ( '$lb', '$typ', null);";
      $insert=$bdd->prepare($sql);
      $insert->execute();
      $chek=true;
      
      {
  }
   

  }
  // else{
  //   echo "veuillez remplire tt les champs";
  // }
  if ($chek) {

    $message="insertion avec succée";
  } // else {
  //    $_SESSION['notif']=" not inserted seccefuly";
     
  // }
  // echo $_SESSION['notif'];



}



?>




<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="addLieux.css?jiiqh" />
    <title>Ajouter un Lieux</title>
  </head>
  <body>
    <?php
    include 'nav_bar.php'
    ?>
    <div class="container">
    <?php if (isset($message)) { ?>
          <div class="alert alert-success"  role="alert" id="notif">
            <?php  echo $message;?>
          </div> <?php }?>
      
      <form method="POST">
        <h2>Ajouter un Lieux</h2>
        <select name="type" id="selectType" required>
          <option value="" selected disabled>Selectioner le Type</option>
          <option value="amphi">Amphi</option>
          <option value="salle_td">Salle de Td</option>
          <option value="salle_tp">Salle de Tp</option>
        </select>
        <input type="number" required name="block"id="selectBlock" placeholder="Entrer le nom du block" min="1" max="200"/>
        <input type="text" required name="Libelle" placeholder="Entrer le nom du Lieux a ajouter"/>
        <input type="submit" value="Ajouter" id="ajt" name="Ajouter" />
        <input type="submit" value="Annuler" id="anl" name="Annuler" />
      </form>
    </div>
    <div class="hidden"></div>

  
<script src="../assets/js/bootstrap.bundle.min.js" ></script>

    <script src="addLieux.js?jAA" ></script>
  </body>
</html>
