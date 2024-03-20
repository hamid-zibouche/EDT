<?php
extract($_GET);
echo $groupe;
include 'connexion.php';


    $sql="select id_sea,type from seance where id_grp='$groupe' ";
    $result=$db->prepare($sql);
    $result->execute();
    $seance=$result->fetchall();
    $message='rien';

    foreach($seance as $seance){
        $message='seance plusieurs';
        if($seance['type']=='cours'){
            $message='cours';
            $sql="select id_sec from groupe where id_grp='$groupe'";
            $result=$db->prepare($sql);
            $result->execute();
            $id_sec=$result->fetchAll()[0]['id_sec'];

            $sql="select id_grp from groupe where id_sec='$id_sec'";
            $result=$db->prepare($sql);
            $result->execute();
            $t_grp=$result->fetchAll();
            
            foreach($t_grp as $t_grp){
                $message='grp';
                $sql="delete from seance where id_grp='$t_grp[id_grp]' and type='cours'";
                $result=$db->prepare($sql);
                $result->execute();
            }

            
        }else{
            $message='td ou tp';
            $sql="delete from seance where id_grp='$groupe'";
            $result=$db->prepare($sql);
            $result->execute();
        }   
    }

if($result){
        header("Location:gestion_emplois_temps.php?message=success");
    }

?>