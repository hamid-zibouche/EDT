<option value="" selected disabled required> CHOISIR Section </option>  
<?php include_once('MySql.php');
 
 extract($_POST);
 
   

   $sql="SELECT id_sec,lib_sec from section where id_pro = '$idp'";
$Sec = $mysqlClient->prepare($sql);
$Sec->execute();
$lib_sec = $Sec->fetchAll();



foreach($lib_sec as $an){
  ?>
  <option value="<?php echo $an['id_sec'];?>" > <?php echo $an['lib_sec'] ;?> </option>
  <?php } ?> 