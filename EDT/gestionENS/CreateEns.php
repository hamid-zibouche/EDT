<?php
  session_start();
  if ($_SESSION['type'] != 'admin')
    header('location:../../index.php');
    require("../connexion.php");
    if (isset($_POST['ajouter'])& !empty($_POST)) {
      
      $nom=$_POST['nom'];
      $prenom=$_POST['prenom'];
      $email=$_POST['email'];
      $datenaissance =$_POST['datenaissance'];
      $db->exec("INSERT into enseignant (nom_ens,prenom_ens,email_ens,date_naiss_ens) values('".$nom."','".$prenom."','".$email
      ."','".$datenaissance."')" );
    // echo"<p style=\"color:green ;text-align:center;\"> inscription faite avec succes </p>";
    
      $message=" Insertion reussi avec succès";
    }
    // else {
    //   $erreur="erreur d'insertion a la base ";
    // }
     ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestion enseigants</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  
    <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="styleAjoutEns.css?idy">
  </head>
 
  <body>
  <?php
   include("nav_bar.php");
  ?>
    <div class="container justify-content-center">
      <div class="row pt-4 ">
        <form action="" method="post" class="form-horizontal col-md-6 pt-4">
        <?php if (isset($message)) { ?>
          <div class="alert alert-success"  role="alert">
            <?php  echo $message;?>
          </div> <?php }?>
  <!-- le cas ou il y'a une erreur -->
           <?php if (isset($erreur)) { ?>
          <div class="alert alert-danger" role="alert" >
            <?php  echo $erreur;?>
          </div> <?php }?>

          <div class="form-group mb-3">
              <div class="h5">
              <h2>Page Ajout d'un enseignant </h2>
              </div>
            </div>
      
          <div class="form-group">
            <label for="idnom"  class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-10">
              <input
                type="text"
                name="nom"
                placeholder="Nom"
                class="form-control"
                id="idnom"
                required
              />
            </div>
          </div>

          <div class="form-group">
            <label for="idpenom" class="col-sm-2 control-label">prenom</label>
            <div class="col-sm-10">
              <input
                type="text"
                name="prenom"
                placeholder="Prenom"
                class="form-control"
                id="idprenom"
                required
              />
            </div>
          </div>

          <div class="form-group">
            <label for="idemail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input
                type="email"
                name="email"
                placeholder="E-mail"
                class="form-control"
                id="idemail"
                required
              />
            </div>
          </div>
              <div class="form-group">
                <label for="iddateNaissance" class="col-sm-2 control-label">Date Naissance</label>
                <div class="col-sm-10">
                  <input
                    type="date"
                    name="datenaissance"
                    placeholder="date niassance"
                    class="form-control"
                    id="iddateNaissance"
                    required
                  />
            </div>
          </div>
         
           <div class="pt-4">
             <button type="submit" class="btn btn-primary m-3" name="ajouter">
               <span><i class="fa-solid fa-user-plus"></i></span>
               <span>Ajouter</span>
             </button>
  
             <a href="listeENS.php">
               <button class="btn btn-success m-3" type="button" > 
                 <span><i class="fa-solid fa-user-group"></i></span>
                <span>liste Enseignants </span> 
                </button> 
             </a>
           </div>
          
      </form>
      </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
