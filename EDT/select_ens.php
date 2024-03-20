<option  value ="" disabled selected >ENSEIGNANTS</option>
<?php 
    extract($_POST);
    include 'connexion.php';
    if (!empty($val)){
    

        $sql = "SELECT id_ens FROM ens_mod where id_mod='$val' ";
        $result=$db->prepare($sql);
        $result->execute();
        $ens=$result->fetchAll();

        $sql = "SELECT id_sem FROM module where id_mod='$val' ";
        $result=$db->prepare($sql);
        $result->execute();
        $sem=$result->fetchAll();
        $sem=$sem[0]['id_sem'];

        $sql = "SELECT lib_sem FROM semestre where id_sem='$sem' ";
        $result=$db->prepare($sql);
        $result->execute();
        $lib_sem=$result->fetchAll();
        $lib_sem=$lib_sem[0]['lib_sem'];

        echo 'semestre'.$lib_sem;

        $chek=false;
        foreach($ens as $ens){
            $id_ens=$ens['id_ens'];
            
            if ($lib_sem=='S1' or $lib_sem=='S3' or $lib_sem=='S5' or $lib_sem=='S7' or $lib_sem=='S9'){
                $sql = "SELECT nom_ens,prenom_ens FROM enseignant where id_ens='$id_ens' and 
                id_ens not in (SELECT id_ens FROM disponibilité_enseignant where heure_debut='$heure_db' and heure_fin='$heure_fn' and jour='$jour' and (lib_sem='S1' or lib_sem='S3'or lib_sem='S5' or lib_sem='S7' or lib_sem='S9'))";
                $result=$db->prepare($sql);
                $result->execute();
                $ens_mod=$result->fetchAll();
            }else{
                $sql = "SELECT nom_ens,prenom_ens FROM enseignant where id_ens='$id_ens' and 
                id_ens not in (SELECT id_ens FROM disponibilité_enseignant where heure_debut='$heure_db' and heure_fin='$heure_fn' and jour='$jour' and (lib_sem='S2' or lib_sem='S4'or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ))";
                $result=$db->prepare($sql);
                $result->execute();
                $ens_mod=$result->fetchAll();
            }   
            if(!empty($ens_mod)){
                $chek=true;
                $nom_ens=$ens_mod[0]['nom_ens'];
                $prenom_ens=$ens_mod[0]['prenom_ens'];

            ?>
            <option value="<?php echo $id_ens;?>">
            <?php
                echo $nom_ens." ".$prenom_ens;
            ?>
            </option>
<?php
        }else{
                $sql = "SELECT * FROM enseignant where id_ens='$id_ens'";
                $result=$db->prepare($sql);
                $result->execute();
                $ense=$result->fetchAll();
                $nom_ens=$ense[0]['nom_ens'];
                $prenom_ens=$ense[0]['prenom_ens'];
                $id_ens=$ense[0]['id_ens'];
                ?>
            <option value="<?php echo $id_ens;?>" disabled>
            <?php
                echo $nom_ens." ".$prenom_ens;
            ?>
            </option>
<?php
        }
    }

    }
    if($chek==false){
        ?>
        <option value="" disabled selected>Aucun enseignant disponible</option>
        <?php
    }
?>