
<?php
require("connexion.php");
$id_etd=$_GET['id_etd'];
$resultat= $bdEmploiTemps->query("SELECT * from etudiant WHERE id_etd=$id_etd");
$tuple=$resultat->fetch();

if (isset($_POST['ajouter'])& !empty($_POST)) {

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$datenaissance =$_POST['datenaissance'];
$idgroup=$_POST['idgroup'];
$bdEmploiTemps->exec("UPDATE  etudiant SET nom_etd='$nom',prenom_etd='$prenom',email_etd='$email',date_naiss_etd='$datenaissance',id_grp='$idgroup' where id_etd=$id_etd");

header("location: viewEtudiant.php");
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
    <title>Mise à jour etudiants</title>
      <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />

    <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="../CSSapp/StyleUpdate.css" />
</head>
<body>
  <?php
   include("../inclusion/nav_bar.php");
  ?>
    <div class="container">
      <div class="row pt-4">
        <form action="" method="post" class="form-horizontal col-md-6 pt-4">
      <!-- le cas ou il y'a une erreur
           <?php if (isset($erreur)) { ?>
          <div class="alert alert-danger" role="alert" >
            <?php  echo $erreur;?>
          </div> <?php }?> -->
          <h2> Modifier un etudiant</h2>
          <div class="form-group">
            <label for="idnom"  class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-10">
              <input
                type="text"
                name="nom"
                placeholder="Nom"
                class="form-control"
                id="idnom"
                value="<?php  echo $tuple['nom_etd']?>"
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
                 value="<?php  echo $tuple['prenom_etd']?>"
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
                 value="<?php  echo $tuple['email_etd']?>"
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
                     value="<?php  echo $tuple['date_naiss_etd']?>"
                  />
            </div>
          </div>
          <div class="form-group">
                <label for="idgoup" class="col-sm-2 control-label">Id Group</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    name="idgroup"
                    placeholder="id group"
                    class="form-control"
                    id="idgroup"
                    value="<?php  echo $tuple['id_grp']?>"
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