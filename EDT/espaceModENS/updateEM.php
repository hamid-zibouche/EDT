<?php
require("../connexion.php");
$id_ens=$_GET['id_ens'];
$id_mod =$_GET['id_mod'];
$id_for =$_GET['id_for'];
$id_sem=$_GET['id_sem'];
echo 'id_sem'.$id_sem .'id_mod '.$id_mod.'id for '.$id_for .'id_ens'.$id_ens;
$resultat=$db->prepare("SELECT * from ens_mod  INNER JOIN enseignant  ON ens_mod.id_ens =  enseignant.id_ens
INNER JOIN module  ON ens_mod.id_mod = module.id_mod INNER join semestre on semestre.id_sem= module.id_sem 
INNER join formation on semestre.id_for= formation.id_for WHERE id_ens =$id_ens AND id_mod=$id_mod");
$resultat->execute();
$tuple=$resultat->fetch();

if (isset($_POST['Afficher'])& !empty($_POST)) {

$idens=$_POST['selectEns'];
$idmod=$_POST['selectmod'];
foreach ($idmod as $module) {
  
    $db->exec("UPDATE ens_mod  SET id_ens='$idens',id_mod='$module'");
    
} 
header("location:listeModEns.php?id_for=<?php echo &id_for?>&id_sem=<?php echo $id_sem?>");
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
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />

    <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
   
    <link rel="icon" href="../img/favicon.ico" type="image/png" />
    <!-- jquery link  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Mise a jour  Module ENS</title>
</head>
<body>
    <?php
     require("../connexion.php");
     include('../nav_bar.php');
    ?>
    
      <div class="row  justify-content-center" style="margin-top :100px;">
        <div class="col-sm-5 col-sm-push-3 monoBlock">
          <form
            action="listeModEns.php"
            method="post"
            class="bg-white p-4 shadow"
          >
            <div class="form-group mb-3">
              <div class="h5 text-center">
               <h2>Mise à jour affectation module</h2>
              </div>
               <div class="form-group mb-3">
              <div class="h5 text-center">
     
              <p>Formation  :  <?php 
               if(isset($_GET['id_for'])) {
                $listefor= $db->query("SELECT * FROM formation WHERE id_for =  $id_for");
                while($tuple=$listefor->fetch()){
                echo $tuple['nom_for'] ; } }?>   
                  Semestre  :  
                <?php  if(isset($_GET['id_sem'])) {
                $listesem= $db->query("SELECT * FROM semestre WHERE id_sem =  $id_sem");
                while($tuple= $listesem->fetch()){
                echo  $tuple['lib_sem'] ; } }?> 
                 </p> 
              </div>
              
              </div>
            </div>
            <select class="form-select form-select-lg mb-4" aria-label=".form-select-lg example" name="selectEns"  >
            <?php 
                $resultat= $db->query("SELECT * FROM enseignant  WHere id_ens =$id_ens");
                $tuple=$resultat->fetch();
            echo '<option selected>'.$tuple['nom_ens']."  ".$tuple['prenom_ens'].'</option>';
            ?>
                <?php 
                $resultat1= $db->query("SELECT * FROM enseignant ");
                while($tuple=$resultat1->fetch()){
              echo '<option value="'.$tuple['id_ens'].'">'.$tuple['nom_ens']."  ".$tuple['prenom_ens'].'</option>';
                }
                ?>
              </select>
           
              <table class="table table-striped">
     <thead class="table-dark" >
       <tr>
       <th scope="col" >selection</th>
       <th scope="col" >Module</th>
       <th scope="col" >Volume horraire</th>
    </tr>
  </thead>
  <tbody  >
  <?php
                require("../connexion.php");
                $resultat=$db->query("SELECT * from module WHERE id_sem= $id_sem");
                while($tuple=$resultat->fetch()){ ?>
    <tr>
      <th scope="row"> <?php if ($tuple['id_mod']==$id_mod && $tuple['id_ens']==$id_mod) {
echo'<div class="form-check col-sm-10 offset-sm-2"><input class="form-check-input"  name="modules[]" value="'.$id_mod.'" type="checkbox" checked></div>';
      } else {echo'<div class="form-check col-sm-10 offset-sm-2"><input class="form-check-input"  name="modules[]" value="'.$tuple['id_mod'].'" type="checkbox"></div>';} ?> </th>
      <td class="text-center"><?php echo $tuple['lib_mod'];?></td>
      <td class="text-center"> <?php echo $tuple['nb_cours']+$tuple['nb_tp']+$tuple['nb_td'];?></td>
    </tr>

    <?php }?>
  </tbody>
       </table>
              <div class="d-grid gap-2 mb-3">
                <button class="btn btn-dark"  type="submit" name="Afficher"> Valider modification   </button>
              </div>
            
              <!-- <a href="sem-forEns.php" class=" stretched-link" style="text-decoration : none ;" >
              <div class="d-grid gap-2 mb-3">
              <button class="btn btn-warning" type="button" name="Annuler"> <a href="ListeModEns.php" style="text-decoration: none;">Annuler</a>  </button>
                 
             
              </div> -->
              <!-- </a> -->
          </form>
        </div>
      </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>