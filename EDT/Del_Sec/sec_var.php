<?php
include_once('MySql.php');
  
        
        
  $For =  $mysqlClient->prepare('SELECT nom_for from formation  ');      
  $For->execute();
  $formation= $For->fetchAll();
?>