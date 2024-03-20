<?php include_once('MySql.php');
 
 extract($_POST);
 $chek=0;
   
if (!empty($idP)){
    $chek=1;
    $sql="DELETE  from promotion where id_pro = '$idP'";
    $Del = $mysqlClient->prepare($sql);
    $Del->execute();
    
}
echo $chek;
  ?>