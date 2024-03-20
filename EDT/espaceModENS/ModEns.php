<?php
 require("../connexion.php");
 $modules =$_POST['modules'];
$idsem=$_GET['id_sem'];
$idEns=$_POST['selectEns'];
// echo $idEns;
// echo $modules;
if (isset($_POST['Afficher'])) {
   foreach ($modules as $module) {
    echo $module
} 
//  { 
//         echo $modules[i];
//     //    $resulat= $db>exec("INSERT into  (id_mod,id_sem,email_etd) values('".$idEns."','".$idEns."')" );
//     }

}

?>