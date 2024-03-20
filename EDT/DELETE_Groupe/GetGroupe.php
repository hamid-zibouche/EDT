<option value="" selected disabled required> CHOISIR Groupe </option>  
<?php include_once('MySql.php');
 
 extract($_POST);

 $sql="SELECT id_grp,lib_grp from groupe where id_sec = '$idS'";
 $grpe = $mysqlClient->prepare($sql);
$grpe->execute();
$lib_grp = $grpe->fetchAll();

foreach($lib_grp as $an){
    ?>
    <option value="<?php echo $an['id_grp'];?>" > <?php echo $an['lib_grp'] ;?> </option>
    <?php } ?> 