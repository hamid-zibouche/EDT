<option value="" selected disabled>MODULE</option>
<?php 
extract($_POST);
include 'connexion.php';
$sql="select id_mod,nom_mod from module where id_sem='$sem'";
$result=$db->prepare($sql);
$result->execute();
$module =$result->fetchAll();

foreach($module as $mod){
?>

<option value="<?php echo $mod['id_mod']?>"><?php echo $mod['nom_mod']?></option>
<?php
}
?>