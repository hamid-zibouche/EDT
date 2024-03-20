<?php
 require("connexion.php");
 $id_for=$_GET['id_for'];
 try{
 $resultat=$bdEmploiTemps->query("DELETE from formation WHERE id_for=$id_for");
 if ($resultat) {
    header("Location: viewformation.php?notif=success");
 }else {
    header("Location: viewformation.php?notif=erreur");
 }
}catch(Exception $e){
    header("Location: viewformation.php?notif=erreur");
}
?>