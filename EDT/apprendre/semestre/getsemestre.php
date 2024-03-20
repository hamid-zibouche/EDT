<option value="" selected disabled required>semtestre de la formation</option>

<?php 
session_start();
$utl='root';
$mdps='';
$chek=false;
$bdd= new PDO('mysql:host=localhost;dbname=gestion_emploie_du_temps;',$utl,$mdps);

extract($_POST);

$sql="SELECT id_sem,lib_sem from semestre where id_for=$form";
$sem=$bdd->prepare($sql);
$sem->execute();
$se=$sem->fetchAll();
foreach ($se as $s) { ?>
<option value="<?php echo $s['id_sem']?>"><?php echo $s['lib_sem']?> </option> 
<?php }?>   


