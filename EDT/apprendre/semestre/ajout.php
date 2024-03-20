<?php 

try{
    $utl='root';
$mdps='';
$chek=false;
$bdd= new PDO('mysql:host=localhost;dbname=gestion_emploie_du_temps;',$utl,$mdps);
extract($_POST);

$sql="INSERT INTO semestre (lib_sem, date_debut,date_fin,id_for) VALUES ('$libelle', '$datd','$datf','$formation')";
$insert=$bdd->prepare($sql);
$insert->execute();
$chek=true;
if($insert){
    header('Location:ajtsemestre.php?message=success');
}
}catch(Exception $e) {
    header('Location:ajtsemestre.php?message=erreur');
}
?>