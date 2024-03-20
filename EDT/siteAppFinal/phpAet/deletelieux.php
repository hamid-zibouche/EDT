<?php
 require("connexion.php");
 $id_lieux=$_GET['id_lieux'];

 
 try {
    $resultat=$bdEmploiTemps->prepare("DELETE from lieux WHERE id_lieux=$id_lieux");
    $resultat->execute();
    if ($resultat)
    header("Location: viewlieu.php?notif=success");

  }
  
  //catch exception
  catch(Exception $e) {
    header("Location: viewlieu.php?notif=erreur");
  }
?>