<?php 
extract($_POST);
if(empty($groupe)){
    header('Location:gestion_emplois_temps.php');
}
$sql = "SELECT lib_grp,id_sec FROM groupe where id_grp='$groupe'";
$result=$db->prepare($sql);
$result->execute();
$grp=$result->fetchAll();
$id_sec=$grp[0]["id_sec"];

$sql = "SELECT lib_sec,id_pro FROM section where id_sec='$id_sec'";
$result=$db->prepare($sql);
$result->execute();
$sec=$result->fetchAll();
$id_pro=$sec[0]['id_pro'];

$sql = "SELECT id_sem FROM promotion where id_pro='$id_pro'";
$result=$db->prepare($sql);
$result->execute();
$pro=$result->fetchAll();
$id_sem=$pro[0]['id_sem'];

$sql = "SELECT id_for,lib_sem FROM semestre where id_sem='$id_sem'";
$result=$db->prepare($sql);
$result->execute();
$sem=$result->fetchAll();
$id_for=$sem[0]['id_for'];

$sql = "SELECT nom_for FROM formation where id_for='$id_for'";
$result=$db->prepare($sql);
$result->execute();
$for=$result->fetchAll();

?>

<?php 
$sql="SELECT id_mod,nom_mod FROM module WHERE id_sem='$id_sem'";
$result=$db->prepare($sql);
$result->execute();
$modules=$result->fetchAll();
?>