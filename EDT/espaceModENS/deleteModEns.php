<?php
 require("../connexion.php");
 $id_ens = $_GET['id_ens'];
 $id_mod= $_GET['id_mod'];

 echo $id_ens.' '.$id_mod;
 $resultat=$db->query("DELETE from ens_mod WHERE( id_ens=$id_ens AND id_mod=$id_mod )");
 if ($resultat) {
    header("Location:listeModEns.php");
 }else {
     echo" erreur de suppression";
 }
?>