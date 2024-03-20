
<?php
require("../connexion.php");
$id_ens=$_GET['id_ens'];
$resultat= $db->query("SELECT * from enseignant WHERE id_ens=$id_ens");
$tuple=$resultat->fetch();

if (isset($_POST['ajouter'])& !empty($_POST)) {

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$datenaissance =$_POST['datenaissance'];

$db->exec("UPDATE enseignant SET nom_ens='$nom',prenom_ens='$prenom',email_ens='$email',date_naiss_ens='$datenaissance' where id_ens=$id_ens");

header("location:listeENS.php");
} else {  
   $erreur="la mise à jour a échoué. ";
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour enseigant</title>
      <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />

    <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="StyleUpdateEns.css?kuy" />
</head>
<body>
  <?php
   include("nav_bar.php");
  ?>
    <div class="container justify-content-center">
      <div class="row pt-4">
        <form action="" method="post" class="form-horizontal col-md-6 pt-4">
      <!-- le cas ou il y'a une erreur
           <?php if (isset($erreur)) { ?>
          <div class="alert alert-danger" role="alert" >
            <?php  echo $erreur;?>
          </div> <?php }?> -->
          <div class="form-group mb-3">
              <div class="h5">
              <h2> Modifier un enseigant</h2>
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
                value="<?php  echo $tuple['nom_ens']?>"
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
                 value="<?php  echo $tuple['prenom_ens']?>"
              />
            </div>
          </div>

          <div class="form-group">
            <label for="idemail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input
                type="text"
                name="email"
                placeholder="E-mail"
                class="form-control"
                id="idemail"
                 value="<?php  echo $tuple['email_ens']?>"
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
                     value="<?php  echo $tuple['date_naiss_ens']?>"
                  />
            </div>
          </div>
  

           <div class="pt-4">
             <button type="submit" class="btn btn-primary m-3" name="ajouter">
               <span><i class="fa-solid fa-user-pen"></i></span>
               <span>Valider modification</span>
             </button>
           </div>
          
      </form>
      </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>