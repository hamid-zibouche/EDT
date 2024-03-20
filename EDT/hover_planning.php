<?php 
include 'connexion.php';
extract($_POST);

$sql="select id_sea from seance where id_grp='$grp'";
$result=$db->prepare($sql);
$result->execute();
$seance=$result->fetchAll();

echo count($seance);

?>