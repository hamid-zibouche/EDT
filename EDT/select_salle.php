<option  value ="" disabled selected >SALLE</option>
<?php 
    session_start();
    include 'connexion.php';
    extract($_POST);
    echo $val;
    echo 'semestre'.$sem;

    if ($sem=='S1' or $sem=='S3' or $sem=='S5' or $sem=='S7' or $sem=='S9' ){
    if($val=='cours'){
        $sql="select id_lieux,lib_lieux from lieux where type='amphi' order by lib_lieux asc";
        $result=$db->prepare($sql);
        $result->execute();
        $lieux=$result->fetchAll();
        if (count($lieux)>0){
            foreach($lieux as $element)
                {
                    $id_lieux=$element['id_lieux'];
                    $sql="select id_lieux,lib_lieux from lieux where id_lieux='$id_lieux' 
                    and id_lieux not in (select id_lieux from disponibilité_lieux where
                     heure_debut='$heure_db' and heure_fin='$heure_fn' and jour='$jour'
                     and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' ))";
                    $result=$db->prepare($sql);
                    $result->execute();
                    $lieux_d=$result->fetchAll();
                    if(count($lieux_d)>0){
                        ?>
                        <option value="<?php echo $element['id_lieux'];?>">
                        <?php
                            echo $element['lib_lieux'];
                            ?>
                        </option>
                        <?php }else{
                            $sql="select id_lieux,lib_lieux from lieux where id_lieux='$id_lieux'";
                            $result=$db->prepare($sql);
                            $result->execute();
                            $lieux_N=$result->fetchAll();
                            $id_lieux_N=$lieux_N[0];['id_lieux'];
                            $lib_lieux_N=$lieux_N[0];['lib_lieux'];
                            ?>
                        <option value="<?php echo $element['id_lieux'];?>" disabled>
                        <?php
                            echo $element['lib_lieux'];
                            ?>
                        </option>
                        <?php
                        }
                    }
                    
                
                
                }
    }
      else 
        if($val=='td'){
        $sql="select id_lieux,lib_lieux,block from lieux where type='salle_td'";
        $result=$db->prepare($sql);
        $result->execute();
        $lieux=$result->fetchAll();
        if (count($lieux)>0){
            foreach($lieux as $element)
                {
                    $id_lieux=$element['id_lieux'];
                    $sql="select id_lieux,lib_lieux,block from lieux where id_lieux='$id_lieux' 
                    and id_lieux not in (select id_lieux from disponibilité_lieux where
                     heure_debut='$heure_db' and heure_fin='$heure_fn' and jour='$jour'
                     and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' ))";
                    $result=$db->prepare($sql);
                    $result->execute();
                    $lieux_d=$result->fetchAll();
                    if(count($lieux_d)>0){
                        ?>
                        <option value="<?php echo $element['id_lieux'];?>">
                        <?php
                            echo "B".$element['block'].$element['lib_lieux'];
                            ?>
                        </option>
                        <?php }else{
                            $sql="select id_lieux,lib_lieux,block from lieux where id_lieux='$id_lieux'";
                            $result=$db->prepare($sql);
                            $result->execute();
                            $lieux_N=$result->fetchAll();
                            $id_lieux_N=$lieux_N[0];['id_lieux'];
                            $lib_lieux_N=$lieux_N[0];['lib_lieux'];
                            ?>
                        <option value="<?php echo $element['id_lieux'];?>" disabled>
                        <?php
                            echo "B".$element['block'].$element['lib_lieux'];
                            ?>
                        </option>
                        <?php
                        }
                    }
                    
                
                
                }
    }  else
    if($val=='tp'){
        $sql="select id_lieux,lib_lieux,block from lieux where type='salle_tp' ";
        $result=$db->prepare($sql);
        $result->execute();
        $lieux=$result->fetchAll();
        if (count($lieux)>0){
            foreach($lieux as $element)
                {
                    $id_lieux=$element['id_lieux'];
                    $sql="select id_lieux,lib_lieux,block from lieux where id_lieux='$id_lieux' 
                    and id_lieux not in (select id_lieux from disponibilité_lieux where
                     heure_debut='$heure_db' and heure_fin='$heure_fn' and jour='$jour'
                     and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' ))";
                    $result=$db->prepare($sql);
                    $result->execute();
                    $lieux_d=$result->fetchAll();
                    if(count($lieux_d)>0){
                        ?>
                        <option value="<?php echo $element['id_lieux'];?>">
                        <?php
                            echo "B".$element['block'].$element['lib_lieux'];
                            ?>
                        </option>
                        <?php }else{
                            $sql="select id_lieux,lib_lieux,block from lieux where id_lieux='$id_lieux'";
                            $result=$db->prepare($sql);
                            $result->execute();
                            $lieux_N=$result->fetchAll();
                            $id_lieux_N=$lieux_N[0];['id_lieux'];
                            $lib_lieux_N=$lieux_N[0];['lib_lieux'];
                            ?>
                        <option value="<?php echo $element['id_lieux'];?>" disabled>
                        <?php
                            echo "B".$element['block'].$element['lib_lieux'];
                            ?>
                        </option>
                        <?php
                        }
                    }
                    
                
                
                }
     }
}else
// pour le cas des deuxiemes semestre
if ($sem=='S2' or $sem=='S4' or $sem=='S6' or $sem=='S8' or $sem=='S10' ){
    if($val=='cours'){
        $sql="select id_lieux,lib_lieux from lieux where type='amphi' order by lib_lieux asc";
        $result=$db->prepare($sql);
        $result->execute();
        $lieux=$result->fetchAll();
        if (count($lieux)>0){
            foreach($lieux as $element)
                {
                    $id_lieux=$element['id_lieux'];
                    $sql="select id_lieux,lib_lieux from lieux where id_lieux='$id_lieux' 
                    and id_lieux not in (select id_lieux from disponibilité_lieux where
                     heure_debut='$heure_db' and heure_fin='$heure_fn' and jour='$jour'
                     and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ))";
                    $result=$db->prepare($sql);
                    $result->execute();
                    $lieux_d=$result->fetchAll();
                    if(count($lieux_d)>0){
                        ?>
                        <option value="<?php echo $element['id_lieux'];?>">
                        <?php
                            echo $element['lib_lieux'];
                            ?>
                        </option>
                        <?php }else{
                            $sql="select id_lieux,lib_lieux from lieux where id_lieux='$id_lieux'";
                            $result=$db->prepare($sql);
                            $result->execute();
                            $lieux_N=$result->fetchAll();
                            $id_lieux_N=$lieux_N[0];['id_lieux'];
                            $lib_lieux_N=$lieux_N[0];['lib_lieux'];
                            ?>
                        <option value="<?php echo $element['id_lieux'];?>" disabled>
                        <?php
                            echo $element['lib_lieux'];
                            ?>
                        </option>
                        <?php
                        }
                    }
                    
                
                
                }
    }
      else 
        if($val=='td'){
        $sql="select id_lieux,lib_lieux,block from lieux where type='salle_td'";
        $result=$db->prepare($sql);
        $result->execute();
        $lieux=$result->fetchAll();
        if (count($lieux)>0){
            foreach($lieux as $element)
                {
                    $id_lieux=$element['id_lieux'];
                    $sql="select id_lieux,lib_lieux,block from lieux where id_lieux='$id_lieux' 
                    and id_lieux not in (select id_lieux from disponibilité_lieux where
                     heure_debut='$heure_db' and heure_fin='$heure_fn' and jour='$jour'
                     and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ))";
                    $result=$db->prepare($sql);
                    $result->execute();
                    $lieux_d=$result->fetchAll();
                    if(count($lieux_d)>0){
                        ?>
                        <option value="<?php echo $element['id_lieux'];?>">
                        <?php
                            echo "B".$element['block'].$element['lib_lieux'];
                            ?>
                        </option>
                        <?php }else{
                            $sql="select id_lieux,lib_lieux,block from lieux where id_lieux='$id_lieux'";
                            $result=$db->prepare($sql);
                            $result->execute();
                            $lieux_N=$result->fetchAll();
                            $id_lieux_N=$lieux_N[0];['id_lieux'];
                            $lib_lieux_N=$lieux_N[0];['lib_lieux'];
                            ?>
                        <option value="<?php echo $element['id_lieux'];?>" disabled>
                        <?php
                            echo "B".$element['block'].$element['lib_lieux'];
                            ?>
                        </option>
                        <?php
                        }
                    }
                    
                
                
                }
    }  else
    if($val=='tp'){
        $sql="select id_lieux,lib_lieux,block from lieux where type='salle_tp'";
        $result=$db->prepare($sql);
        $result->execute();
        $lieux=$result->fetchAll();
        if (count($lieux)>0){
            foreach($lieux as $element)
                {
                    $id_lieux=$element['id_lieux'];
                    $sql="select id_lieux,lib_lieux,block from lieux where id_lieux='$id_lieux' 
                    and id_lieux not in (select id_lieux from disponibilité_lieux where
                     heure_debut='$heure_db' and heure_fin='$heure_fn' and jour='$jour'
                     and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ))";
                    $result=$db->prepare($sql);
                    $result->execute();
                    $lieux_d=$result->fetchAll();
                    if(count($lieux_d)>0){
                        ?>
                        <option value="<?php echo $element['id_lieux'];?>">
                        <?php
                            echo "B".$element['block'].$element['lib_lieux'];
                            ?>
                        </option>
                        <?php }else{
                            $sql="select id_lieux,lib_lieux,block from lieux where id_lieux='$id_lieux'";
                            $result=$db->prepare($sql);
                            $result->execute();
                            $lieux_N=$result->fetchAll();
                            $id_lieux_N=$lieux_N[0];['id_lieux'];
                            $lib_lieux_N=$lieux_N[0];['lib_lieux'];
                            ?>
                        <option value="<?php echo $element['id_lieux'];?>" disabled>
                        <?php
                            echo "B".$element['block'].$element['lib_lieux'];
                            ?>
                        </option>
                        <?php
                        }
                    }
                    
                
                
                }
     }
}
    ?>