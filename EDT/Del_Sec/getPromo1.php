<option value="CHOISIR_SEMESTRE " selected disabled  required> CHOISIR Promo </option>  
<?php include_once('MySql.php');
 
 extract($_POST);
 
   

   $sql="SELECT id_Pro,annee from promotion where id_sem = '$idS'";
$Sem = $mysqlClient->prepare($sql);
$Sem->execute();
$anne_pro = $Sem->fetchAll();



foreach($anne_pro as $an){
  ?>
  <option value="<?php echo $an['id_Pro'];?>" > <?php echo $an['annee'] ;?> </option>
  <?php } ?> 
