<option value="CHOISIR_SEMESTRE " selected disabled required> CHOISIR SEMESTRE </option>  
<?php include_once('MySql.php');
 
 extract($_POST);
 
  

   $sql="SELECT id_for from formation where nom_for = '$form'";
$Sem = $mysqlClient->prepare($sql);
$Sem->execute();
$id_form = $Sem->fetchAll();
$id_form = $id_form[0]['id_for'];

$semestre = $mysqlClient->prepare("SELECT lib_sem, id_sem from semestre where id_for = $id_form ");
$semestre->execute();
$semestres= $semestre->fetchAll();
foreach($semestres as $sem){
  ?>
  <option value="<?php echo $sem['id_sem'];?>" > <?php echo $sem['lib_sem'] ;?> </option>
  <?php } ?> 
