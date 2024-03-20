<?php
 require("connexion.php");
 $id_etd=$_GET['id_etd'];
 $resultat=$bdEmploiTemps->query("DELETE from etudiant WHERE id_etd=$id_etd");
 if ($resultat) {
    header("Location: viewEtudiant.php");
 }else {
     echo" erreur de suppression";
 }
?>