<?php
if (isset($_GET['formation']) && !empty($_GET['formation'])) {
 require('../connexion.php');
 $id=$_GET['formation'];

 $resultat= $db->query("SELECT * FROM semestre WHERE id_for='$id'");
 $count=$db->query("SELECT COUNT(*) FROM semestre WHERE id_for='$id'");
    if ($count > 0) {
        while($tuple=$resultat->fetch()){
            echo '<option value="'.$tuple['id_sem'].'" name="sem">'.$tuple['lib_sem'].'</option>';
              } 
    } else {
        if ($count == 0) {
            echo '<option> Pas de semestre poue cette Formation</option>';
        }
 
    }
    


} else {
    echo '<h1> erreur</h1>';
}

?>
