<?php  include_once('MySql.php');
$check = 0;
if(!empty($_POST['nbrG'])&& !empty($_POST['idpromo'])&& !empty($_POST['lib_S'])  ){
  $check = 1 ;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };
$nbr_groupe = $_POST['nbrG'];
$promo =$_POST['idpromo'];
$libel_sec=$_POST['lib_S'];

test_input($nbr_groupe);
test_input($promo);
test_input($libel_sec);


$AJT =  $mysqlClient->prepare('INSERT INTO section(lib_sec,nbr_groupe,id_pro) values(:lib_sec,:nbr_groupe,:id_pro)');
$AJT->execute([

'nbr_groupe'=> $nbr_groupe,
'id_pro'=> $promo,
'lib_sec'=> $libel_sec,
]); ?>

<?php
} echo $check;
?>