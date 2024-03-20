<?php 
usleep(500000);
extract($_POST);
$test=false;
if(!empty($module) and !empty($salle) and !empty($enseignant) and !empty($type)){
        include 'connexion.php';
        $sql = "SELECT id_ens FROM `enseignant` WHERE `nom_ens` = '$enseignant'";
        

        $sql = "SELECT id_ed_ens FROM `edt_ens` WHERE '$enseignant' = id_ens";
        $result = $db->prepare($sql);
        $result->execute();
        $result=$result->fetchAll();
        $id_ed_ens=$result[0]['id_ed_ens'];

        $sql = "SELECT id_mod FROM `module` WHERE `nom_mod` = '$module'";
      

        $sql = "SELECT id_lieux FROM `lieux` WHERE `lib_lieux` = '$salle'";
        

        $sql = "SELECT id_edt FROM edt WHERE `id_groupe` = '$grp'";
        $result = $db->prepare($sql);
        $result->execute();
        $result=$result->fetchAll();
        $id_edt=$result[0]['id_edt'];

        $sql = "SELECT id_sec FROM groupe WHERE `id_grp` = '$grp'";
        $result = $db->prepare($sql);
        $result->execute();
        $sec=$result->fetchAll();
        $sec=$sec[0]['id_sec'];

        $sql = "SELECT id_grp FROM groupe WHERE `id_sec` = '$sec'";
        $result = $db->prepare($sql);
        $result->execute();
        $t_grp=$result->fetchAll();
        
       
        $sql = "SELECT lib_sem FROM semestre WHERE `id_sem` = '$sem'";
        $result = $db->prepare($sql);
        $result->execute();
        $lib_sem=$result->fetchAll();
        $lib_sem=$lib_sem[0]['lib_sem'];
        
        
        if($cr=='valider'){
            echo 'pour le test';
            if($type=='cours'){
                
                foreach($t_grp as $gr){

                    $sql=("DELETE  FROM `seance` WHERE (`type`='td' or `type`='tp') and jour='$jr' and `heure_debut`='$hr_db' and `heure_fin`='$hr_fin' and `id_grp`='$gr[id_grp]' and lib_sem='$lib_sem'");
                    $result = $db->prepare($sql);
                    $result->execute();

                    $sql = "SELECT id_edt FROM edt WHERE `id_groupe` = '$gr[id_grp]'";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $result=$result->fetchAll();
                    $id_edt_i=$result[0]['id_edt'];

                $savedata=$db->prepare("INSERT INTO `seance` (`id_sea`, `type`, `jour`, `heure_debut`, `heure_fin`, `id_grp`, `id_lieux`, `id_ens`, `id_mod`, `id_edt`, `id_edt_ens`, `lib_sem`) VALUES ('', '$type','$jr', '$hr_db', '$hr_fin', '$gr[id_grp]', '$salle', '$enseignant', '$module', '$id_edt_i', '$id_ed_ens','$lib_sem');");
                $savedata->execute();
                }
            }
            else{
                $savedata=$db->prepare("INSERT INTO `seance` (`id_sea`, `type`, `jour`, `heure_debut`, `heure_fin`, `id_grp`, `id_lieux`, `id_ens`, `id_mod`, `id_edt`, `id_edt_ens`, `lib_sem`) VALUES ('', '$type','$jr', '$hr_db', '$hr_fin', '$grp', '$salle', '$enseignant', '$module', '$id_edt', '$id_ed_ens','$lib_sem');");
                $savedata->execute();
            }
            $test=true;
        }
        else if ($cr=='reussi'){

            if($type=='cours'){
            
            foreach($t_grp as $gr_d){

                $sql = "SELECT id_edt FROM edt WHERE `id_groupe` = '$gr_d[id_grp]'";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $result=$result->fetchAll();
                    $id_edt_d=$result[0]['id_edt'];

            $savedata=$db->prepare("DELETE  FROM `seance` WHERE `type`='$type' and jour='$jr' and `heure_debut`='$hr_db' and `heure_fin`='$hr_fin' and `id_grp`='$gr_d[id_grp]' and `id_lieux`='$salle' and `id_ens`='$enseignant' and `id_mod`='$module' and `id_edt`='$id_edt_d' and `id_edt_ens`='$id_ed_ens' and lib_sem='$lib_sem'");
            $savedata->execute();
            
            }
            $test='1';
        }
        else{
            $savedata=$db->prepare("DELETE  FROM `seance` WHERE `type`='$type' and jour='$jr' and `heure_debut`='$hr_db' and `heure_fin`='$hr_fin' and `id_grp`='$grp' and `id_lieux`='$salle' and `id_ens`='$enseignant' and `id_mod`='$module' and `id_edt`='$id_edt' and `id_edt_ens`='$id_ed_ens' and lib_sem='$lib_sem'");
            $savedata->execute();
            $test='1';
            }
        }
}

if($test ==false){
    echo '0';
}
else if($test=='1'){
    echo '1';
}
?>
 
