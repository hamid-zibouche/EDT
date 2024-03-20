
<?php include_once('MySql.php');
 $check=0;

 extract($_POST);
 if(!empty($idSec)){
   $check = 1;

   $sql="DELETE  from section where id_sec = '$idSec'";
$Del = $mysqlClient->prepare($sql);
$Del->execute();
 $ishere = "Il faut saisire tous les champs";
  

 }
 echo $check;
 ?>
   
