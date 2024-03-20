<?php 
session_start();
$utl='root';
$mdps='';
$chek=false;
$bdd= new PDO('mysql:host=localhost;dbname=gestion_emploie_du_temps;',$utl,$mdps);
if (isset($_POST['suprimer'])) {
    $chek=true;
    if ($chek) {
    
    $message="inserted seccefuly";
}
}





?>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="supsemestre.css?cddiiut,">

  <title>Sup semestre</title>
</head>
<body>
<?php include_once('nav_bar.php');?>
  <div class="container">
    <div class="row">
      <div class="col-12 ">
       
        <?php if(isset($_GET['message'])){
          
        ?>
          <div class="alert alert-success" id='msgS'  role="alert">
            Suppression avec Success
          </div> 
          <?php }?>
          <div class="alert alert-danger" id='msgE_C'  role="alert">
            Selectionner tous les champs
          </div>
          <div class="alert alert-danger" id='msgE_S'  role="alert">
            Supression impossible!!
          </div> 

        <form method="post">
          <h2>Suprime un Semestre</h2>
          <select class="form-select" aria-label="Default select example" name="for" id="fr"  required >
                <option value="" selected disabled>choiasisser votre formation</option>
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

            <select class="form-select" aria-label="Default select example" name="for" id="sem" required>
                <option value="" selected disabled>choiasisser votre formation</option>
            </select>
            
            
          <input type="submit" name="suprimer" value="Suprimer" id="sup">
          <input type="submit" name="Annule" value="Annule" id="anl">

        </form>
        
      </div>
   </div>
 </div>



</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="../assets/js/bootstrap.bundle.min.js" ></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
  <script src="supsem.js?hig"></script>
</body>
</html>