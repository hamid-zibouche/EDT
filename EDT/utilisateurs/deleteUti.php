<?php
 require("../connexion.php");
 $id_uti=$_GET['id_uti'];
 $resultat=$db->query("DELETE from utilisteur  WHERE id_uti=$id_uti");
 if ($resultat) {
    $message="un utilisateur a été supprimmer !";
    header("Location:listeuti.php");
 }else {
    $erreur="erreur de suppression !";
    header("Location:listeuti.php?erreur=<?php echo $erreur ;?>");
 }
?>