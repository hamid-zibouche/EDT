<?php  include_once('MySql.php');
$check = 0;
if(!empty($_POST['idSec'])&& !empty($_POST['libP'])&& !empty($_POST['annee'])  ){
  $check = 1 ;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };
$idSec= $_POST['idSec'];
$lib_promo =$_POST['libP'];
$annee=$_POST['annee'];

test_input($idSec);
test_input($lib_promo);
test_input($annee);


$AJT =  $mysqlClient->prepare('INSERT INTO promotion(lib_promo,annee,id_sem) values(:lib_promo,:annee,:id_sem)');
$AJT->execute([

'lib_promo'=> $lib_promo,
'annee'=> $annee,
'id_sem'=> $idSec,
]); ?>

<?php
} echo $check;
?>