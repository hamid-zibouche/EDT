<?php
try {
    // PDO(url, nomutulisateur,password)
    $bdEmploiTemps=new PDO("mysql:host=localhost;dbname=gestion_emploie_du_temps;charset=utf8","root","");
   
} catch (\Throwable $th) {
    // la concatination se fait avec ->
   die("echec de connexion a la base de données".$th->getMessage());
}
?>