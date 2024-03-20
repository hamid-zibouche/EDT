<?php  include_once('MySql.php');
$check = 0;
if(!empty($_POST['idS'])&& !empty($_POST['libG']) ){
  $check = 1 ;
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };
$libelle_grp = $_POST['libG'];
$id_section =$_POST['idS'];


test_input($id_section);

test_input($libelle_grp);


$AJT =  $mysqlClient->prepare('INSERT INTO groupe(lib_grp,id_sec) values(:lib_grp,:id_sec)');
$AJT->execute([


'id_sec'=> $id_section,
'lib_grp'=> $libelle_grp,
]); ?>

<?php
}  echo $check;
?>