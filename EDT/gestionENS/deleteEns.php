<?php
 require("../connexion.php");
 $id_ens=$_GET['id_ens'];
 $resultat=$db->query("DELETE from enseignant WHERE id_ens=$id_ens");
 if ($resultat) {
    header("Location:listeENS.php");
 }else {
     echo" erreur de suppression";
 }
?>