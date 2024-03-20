<?php
 require("../connexion.php");
 $modules =$_POST['modules'];
$idEns=$_POST['selectEns'];
$id_sem=$_GET['id_sem'];
$id_for=$_GET['id_for'];
// echo $modules;
if (isset($_POST['Afficher'])) {
   foreach ($modules as $module) {
    echo 'id module'.$module;
    echo 'id ens:' .$idEns;
  
    $sql="INSERT into  ens_mod  values ('$module','$idEns')";
    $result=$db->prepare($sql);
    $result->execute();
    
} 
if ($result) {
    $message=" Insertion reussie avec succès";
    header("Location:listeModEns.php?message=<?php echo $message ;?>& id_sem=<?php echo $id_sem?> &id_for=<?php echo $id_for?>");
} else {
    $message="erreur d'insertion a la base ";
}

}

?>