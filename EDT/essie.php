<?php
include 'connexion.php';
extract($_POST);

$sql="select id_grp from groupe as g inner join section as s on
        (g.id_sec=s.id_sec) inner join promotion as p on 
        (s.id_pro=p.id_pro) inner join semestre as sem on 
        (p.id_sem=sem.id_sem) inner join formation as f on 
        (sem.id_for=f.id_for) where sem.lib_sem='$sem' and s.lib_sec='$sec' 
        and f.nom_for='$for' and p.annee='$ses' and lib_grp='$grp';";
$result=$db->prepare($sql);
$result->execute();
$id_grp=$result->fetchAll();

echo $id_grp[0]['id_grp'];

?>