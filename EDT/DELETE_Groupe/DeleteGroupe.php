<?php include_once('MySql.php');
 
 extract($_POST);
 $chek=0;
   
if (!empty($idG)){
    $chek=1;
    $sql="DELETE  from groupe where id_grp = '$idG'";
    $Del = $mysqlClient->prepare($sql);
    $Del->execute();
    $ishere = "Il faut saisire tous les champs";
}
echo $chek;
  ?>