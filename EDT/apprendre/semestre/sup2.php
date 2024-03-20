<?php 
session_start();
$utl='root';
$mdps='';
$chek=0;
$bdd= new PDO('mysql:host=localhost;dbname=gestion_emploie_du_temps;',$utl,$mdps);

extract($_POST);
if(!empty($idsem)){
    
$rmv=$bdd->prepare("DELETE from semestre where id_sem='$idsem'");
$rmv->execute();
if ($rmv) {
    echo '1';
}
}
?>
