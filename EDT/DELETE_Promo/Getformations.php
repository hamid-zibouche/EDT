<?php
include_once('MySql.php');
  
        
        
  $For =  $mysqlClient->prepare('SELECT id_for,nom_for from formation  ');      
  $For->execute();
  $formation= $For->fetchAll();
?>