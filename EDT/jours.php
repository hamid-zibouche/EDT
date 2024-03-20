<td class="contenue">
    <form method="POST" action="save.php">
        <select name="module" id="modules" title="Selectionner un module">
            <option value="" selected disabled> MODULE </option>
            <?php 
            $sql="SELECT * FROM seance where id_grp=$groupe and jour='$jour' and heure_debut='8:0:0'";
            $result = $db->prepare($sql);
            $result->execute();
            $seance1 = $result->fetchAll();
            $taille=count($seance1)-1;
            $id_m=$seance1[$taille]['id_mod'];
            $type_s=$seance1[$taille]['type'];
            $id_enseignant=$seance1[$taille]['id_ens'];
            
            $test=true;
            
            if (!empty($seance1))
            {
                        
                $sql="SELECT nom_mod FROM module where id_mod='$id_m'";
                $result = $db->prepare($sql);
                $result->execute();
                $mod= $result->fetchAll();
                $nom_mod= $mod[0]['nom_mod'];
            ?>
                        <option value="<?php echo $id_m;?>" selected>
                            <?php
                                echo $nom_mod;
                            ?>
                        </option>
                            <?php
                    
            }else{
                    foreach($modules as $m)
                        {
                            ?>
                            <option value="<?php echo $m['id_mod'];?>">
                            <?php
                                echo $m['nom_mod'];
                            ?>
                        </option>
                            <?php
                    }
                }
                             ?>
        </select>

        <select name="salle" id="salle" title="Selectionner la salle">
            
            <?php
                if (!empty($seance1))
                {   
                ?>
                <option  value ="" disabled selected >SALLE</option>
                <?php
                if($type_s=='cours'){

                    $id_lieux=$seance1[$taille]['id_lieux'];
                    $sql="SELECT lib_lieux FROM lieux where id_lieux='$id_lieux'";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $lieux= $result->fetchAll();
                    $lib_lieux= $lieux[0]['lib_lieux'];

                        {
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo $lib_lieux;
            ?>
</option>
    <?php
        } 
    }
        if($type_s=='td'){
            $id_lieux=$seance1[$taille]['id_lieux'];
            $sql="SELECT lib_lieux,block FROM lieux where id_lieux='$id_lieux'";
            $result = $db->prepare($sql);
            $result->execute();
            $lieux= $result->fetchAll();
            $lib_lieux= $lieux[0]['lib_lieux'];
            $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
    </option>
        <?php
             }
            if($type_s=='tp'){
                $id_lieux=$seance1[$taille]['id_lieux'];
                $sql="select lib_lieux,block from lieux where id_lieux='$id_lieux'  ";
                $result=$db->prepare($sql);
                $result->execute();
                $lieux=$result->fetchAll();
                $lib_lieux= $lieux[0]['lib_lieux'];
                $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
        </option>
            <?php
                 }
                }
    ?>
    <!--  -->
        </select>

        <select name="type" id="type" title="Selectionner le type de la séance">
            <option value="" selected disabled> TYPE</option>
            <?php
                if (!empty($seance1))
                {
                            
                    $type=$seance1[$taille]['type'];
                ?>
                            <option value="<?php echo $type;?>" selected>
                                <?php
                                    echo $type;
                                ?>
                            </option>
                                <?php
                        
                }else{?>

                    <option value="cours">COURS</option>
                    <option value="td">TD</option>
                    <option value="tp">TP</option>

                    <?php
                    }
                    ?>
            
        </select>

        <select name="enseignant" id="enseignant" title="Selectionner un enseignant">
            <?php if (!empty($seance1))
            {   $test=false;
                        
                $sql="SELECT nom_ens,prenom_ens FROM enseignant where id_ens='$id_enseignant'";
                $result = $db->prepare($sql);
                $result->execute();
                $enseignant = $result->fetchAll();
                $nom_ens = $enseignant[0]['nom_ens'];
                $prenom_ens = $enseignant[0]['prenom_ens'];
            ?>
                        <option value="<?php echo $id_enseignant;?>" selected>
                            <?php
                                echo $nom_ens.' '.$prenom_ens;
                            ?>
                        </option>
                            <?php
                    
            }?>
        </select>
        <?php if (!empty($seance1))
            {?>
            <input type="submit" id="8" class="reussi" name="submit" value="Annuler" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
            }else{
                ?>
            <input type="submit" id="8" class="valider" name="submit" value="Valider" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
             }
            ?>
    </form>
</td>

<td class="contenue">
    <form method="POST" action="save.php">
        <select name="module" id="modules" title="Selectionner un module">
            <option value="" selected disabled> MODULE </option>
            <?php 
            $sql="SELECT * FROM seance where id_grp=$groupe and jour='$jour' and heure_debut='9:10:0'";
            $result = $db->prepare($sql);
            $result->execute();
            $seance1 = $result->fetchAll();
            $taille=count($seance1)-1;
            $id_m=$seance1[$taille]['id_mod'];
            $type_s=$seance1[$taille]['type'];
            $id_enseignant=$seance1[$taille]['id_ens'];
            
            $test=true;
            
            if (!empty($seance1))
            {
                        
                $sql="SELECT nom_mod FROM module where id_mod='$id_m'";
                $result = $db->prepare($sql);
                $result->execute();
                $mod= $result->fetchAll();
                $nom_mod= $mod[0]['nom_mod'];
            ?>
                        <option value="<?php echo $id_m;?>" selected>
                            <?php
                                echo $nom_mod;
                            ?>
                        </option>
                            <?php
                    
            }else{
                    foreach($modules as $m)
                        {
                            ?>
                            <option value="<?php echo $m['id_mod'];?>">
                            <?php
                                echo $m['nom_mod'];
                            ?>
                        </option>
                            <?php
                    }
                }
                             ?>
        </select>

        <select name="salle" id="salle" title="Selectionner la salle">
            
            <?php
                if (!empty($seance1))
                {   
                ?>
                <option  value ="" disabled selected >SALLE</option>
                <?php
                if($type_s=='cours'){

                    $id_lieux=$seance1[$taille]['id_lieux'];
                    $sql="SELECT lib_lieux FROM lieux where id_lieux='$id_lieux'";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $lieux= $result->fetchAll();
                    $lib_lieux= $lieux[0]['lib_lieux'];

                        {
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo $lib_lieux;
            ?>
</option>
    <?php
        } 
    }
        if($type_s=='td'){
            $id_lieux=$seance1[$taille]['id_lieux'];
            $sql="SELECT lib_lieux,block FROM lieux where id_lieux='$id_lieux'";
            $result = $db->prepare($sql);
            $result->execute();
            $lieux= $result->fetchAll();
            $lib_lieux= $lieux[0]['lib_lieux'];
            $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
    </option>
        <?php
             }
            if($type_s=='tp'){
                $id_lieux=$seance1[$taille]['id_lieux'];
                $sql="select lib_lieux,block from lieux where id_lieux='$id_lieux'  ";
                $result=$db->prepare($sql);
                $result->execute();
                $lieux=$result->fetchAll();
                $lib_lieux= $lieux[0]['lib_lieux'];
                $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
        </option>
            <?php
                 }
                }
    ?>
    <!--  -->
        </select>

        <select name="type" id="type" title="Selectionner le type de la séance">
            <option value="" selected disabled> TYPE</option>
            <?php
                if (!empty($seance1))
                {
                            
                    $type=$seance1[$taille]['type'];
                ?>
                            <option value="<?php echo $type;?>" selected>
                                <?php
                                    echo $type;
                                ?>
                            </option>
                                <?php
                        
                }else{?>

                    <option value="cours">COURS</option>
                    <option value="td">TD</option>
                    <option value="tp">TP</option>

                    <?php
                    }
                    ?>
            
        </select>

        <select name="enseignant" id="enseignant" title="Selectionner un enseignant">
            <?php if (!empty($seance1))
            {   $test=false;
                        
                $sql="SELECT nom_ens,prenom_ens FROM enseignant where id_ens='$id_enseignant'";
                $result = $db->prepare($sql);
                $result->execute();
                $enseignant = $result->fetchAll();
                $nom_ens = $enseignant[0]['nom_ens'];
                $prenom_ens = $enseignant[0]['prenom_ens'];
            ?>
                        <option value="<?php echo $id_enseignant;?>" selected>
                            <?php
                                echo $nom_ens.' '.$prenom_ens;
                            ?>
                        </option>
                            <?php
                    
            }?>
        </select>
        <?php if (!empty($seance1))
            {?>
            <input type="submit" id="9" class="reussi" name="submit" value="Annuler" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
            }else{
                ?>
            <input type="submit" id="9" class="valider" name="submit" value="Valider" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
             }
            ?>
    </form>
</td>
<td class="contenue">
    <form method="POST" action="save.php">
        <select name="module" id="modules" title="Selectionner un module">
            <option value="" selected disabled> MODULE </option>
            <?php 
            $sql="SELECT * FROM seance where id_grp=$groupe and jour='$jour' and heure_debut='10:20:0'";
            $result = $db->prepare($sql);
            $result->execute();
            $seance1 = $result->fetchAll();
            $taille=count($seance1)-1;
            $id_m=$seance1[$taille]['id_mod'];
            $type_s=$seance1[$taille]['type'];
            $id_enseignant=$seance1[$taille]['id_ens'];
            
            $test=true;
            
            if (!empty($seance1))
            {
                        
                $sql="SELECT nom_mod FROM module where id_mod='$id_m'";
                $result = $db->prepare($sql);
                $result->execute();
                $mod= $result->fetchAll();
                $nom_mod= $mod[0]['nom_mod'];
            ?>
                        <option value="<?php echo $id_m;?>" selected>
                            <?php
                                echo $nom_mod;
                            ?>
                        </option>
                            <?php
                    
            }else{
                    foreach($modules as $m)
                        {
                            ?>
                            <option value="<?php echo $m['id_mod'];?>">
                            <?php
                                echo $m['nom_mod'];
                            ?>
                        </option>
                            <?php
                    }
                }
                             ?>
        </select>

        <select name="salle" id="salle" title="Selectionner la salle">
            
            <?php
                if (!empty($seance1))
                {   
                ?>
                <option  value ="" disabled selected >SALLE</option>
                <?php
                if($type_s=='cours'){

                    $id_lieux=$seance1[$taille]['id_lieux'];
                    $sql="SELECT lib_lieux FROM lieux where id_lieux='$id_lieux'";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $lieux= $result->fetchAll();
                    $lib_lieux= $lieux[0]['lib_lieux'];

                        {
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo $lib_lieux;
            ?>
</option>
    <?php
        } 
    }
        if($type_s=='td'){
            $id_lieux=$seance1[$taille]['id_lieux'];
            $sql="SELECT lib_lieux,block FROM lieux where id_lieux='$id_lieux'";
            $result = $db->prepare($sql);
            $result->execute();
            $lieux= $result->fetchAll();
            $lib_lieux= $lieux[0]['lib_lieux'];
            $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
    </option>
        <?php
             }
            if($type_s=='tp'){
                $id_lieux=$seance1[$taille]['id_lieux'];
                $sql="select lib_lieux,block from lieux where id_lieux='$id_lieux'  ";
                $result=$db->prepare($sql);
                $result->execute();
                $lieux=$result->fetchAll();
                $lib_lieux= $lieux[0]['lib_lieux'];
                $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
        </option>
            <?php
                 }
                }
    ?>
    <!--  -->
        </select>

        <select name="type" id="type" title="Selectionner le type de la séance">
            <option value="" selected disabled> TYPE</option>
            <?php
                if (!empty($seance1))
                {
                            
                    $type=$seance1[$taille]['type'];
                ?>
                            <option value="<?php echo $type;?>" selected>
                                <?php
                                    echo $type;
                                ?>
                            </option>
                                <?php
                        
                }else{?>

                    <option value="cours">COURS</option>
                    <option value="td">TD</option>
                    <option value="tp">TP</option>

                    <?php
                    }
                    ?>
            
        </select>

        <select name="enseignant" id="enseignant" title="Selectionner un enseignant">
            <?php if (!empty($seance1))
            {   $test=false;
                        
                $sql="SELECT nom_ens,prenom_ens FROM enseignant where id_ens='$id_enseignant'";
                $result = $db->prepare($sql);
                $result->execute();
                $enseignant = $result->fetchAll();
                $nom_ens = $enseignant[0]['nom_ens'];
                $prenom_ens = $enseignant[0]['prenom_ens'];
            ?>
                        <option value="<?php echo $id_enseignant;?>" selected>
                            <?php
                                echo $nom_ens.' '.$prenom_ens;
                            ?>
                        </option>
                            <?php
                    
            }?>
        </select>
        <?php if (!empty($seance1))
            {?>
            <input type="submit" id="10" class="reussi" name="submit" value="Annuler" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
            }else{
                ?>
            <input type="submit" id="10" class="valider" name="submit" value="Valider" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
             }
            ?>
    </form>
</td>

<td class="contenue">
    <form method="POST" action="save.php">
        <select name="module" id="modules" title="Selectionner un module">
            <option value="" selected disabled> MODULE </option>
            <?php 
            $sql="SELECT * FROM seance where id_grp=$groupe and jour='$jour' and heure_debut='11:30:0'";
            $result = $db->prepare($sql);
            $result->execute();
            $seance1 = $result->fetchAll();
            $taille=count($seance1)-1;
            $id_m=$seance1[$taille]['id_mod'];
            $type_s=$seance1[$taille]['type'];
            $id_enseignant=$seance1[$taille]['id_ens'];
            
            $test=true;
            
            if (!empty($seance1))
            {
                        
                $sql="SELECT nom_mod FROM module where id_mod='$id_m'";
                $result = $db->prepare($sql);
                $result->execute();
                $mod= $result->fetchAll();
                $nom_mod= $mod[0]['nom_mod'];
            ?>
                        <option value="<?php echo $id_m;?>" selected>
                            <?php
                                echo $nom_mod;
                            ?>
                        </option>
                            <?php
                    
            }else{
                    foreach($modules as $m)
                        {
                            ?>
                            <option value="<?php echo $m['id_mod'];?>">
                            <?php
                                echo $m['nom_mod'];
                            ?>
                        </option>
                            <?php
                    }
                }
                             ?>
        </select>

        <select name="salle" id="salle" title="Selectionner la salle">
            
            <?php
                if (!empty($seance1))
                {   
                ?>
                <option  value ="" disabled selected >SALLE</option>
                <?php
                if($type_s=='cours'){

                    $id_lieux=$seance1[$taille]['id_lieux'];
                    $sql="SELECT lib_lieux FROM lieux where id_lieux='$id_lieux'";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $lieux= $result->fetchAll();
                    $lib_lieux= $lieux[0]['lib_lieux'];

                        {
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo $lib_lieux;
            ?>
</option>
    <?php
        } 
    }
        if($type_s=='td'){
            $id_lieux=$seance1[$taille]['id_lieux'];
            $sql="SELECT lib_lieux,block FROM lieux where id_lieux='$id_lieux'";
            $result = $db->prepare($sql);
            $result->execute();
            $lieux= $result->fetchAll();
            $lib_lieux= $lieux[0]['lib_lieux'];
            $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
    </option>
        <?php
             }
            if($type_s=='tp'){
                $id_lieux=$seance1[$taille]['id_lieux'];
                $sql="select lib_lieux,block from lieux where id_lieux='$id_lieux'  ";
                $result=$db->prepare($sql);
                $result->execute();
                $lieux=$result->fetchAll();
                $lib_lieux= $lieux[0]['lib_lieux'];
                $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
        </option>
            <?php
                 }
                }
    ?>
    <!--  -->
        </select>

        <select name="type" id="type" title="Selectionner le type de la séance">
            <option value="" selected disabled> TYPE</option>
            <?php
                if (!empty($seance1))
                {
                            
                    $type=$seance1[$taille]['type'];
                ?>
                            <option value="<?php echo $type;?>" selected>
                                <?php
                                    echo $type;
                                ?>
                            </option>
                                <?php
                        
                }else{?>

                    <option value="cours">COURS</option>
                    <option value="td">TD</option>
                    <option value="tp">TP</option>

                    <?php
                    }
                    ?>
            
        </select>

        <select name="enseignant" id="enseignant" title="Selectionner un enseignant">
            <?php if (!empty($seance1))
            {   $test=false;
                        
                $sql="SELECT nom_ens,prenom_ens FROM enseignant where id_ens='$id_enseignant'";
                $result = $db->prepare($sql);
                $result->execute();
                $enseignant = $result->fetchAll();
                $nom_ens = $enseignant[0]['nom_ens'];
                $prenom_ens = $enseignant[0]['prenom_ens'];
            ?>
                        <option value="<?php echo $id_enseignant;?>" selected>
                            <?php
                                echo $nom_ens.' '.$prenom_ens;
                            ?>
                        </option>
                            <?php
                    
            }?>
        </select>
        <?php if (!empty($seance1))
            {?>
            <input type="submit" id="11" class="reussi" name="submit" value="Annuler" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
            }else{
                ?>
            <input type="submit" id="11" class="valider" name="submit" value="Valider" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
             }
            ?>
    </form>
</td>
<td class="contenue">
    <form method="POST" action="save.php">
        <select name="module" id="modules" title="Selectionner un module">
            <option value="" selected disabled> MODULE </option>
            <?php 
            $sql="SELECT * FROM seance where id_grp=$groupe and jour='$jour' and heure_debut='12:40:0'";
            $result = $db->prepare($sql);
            $result->execute();
            $seance1 = $result->fetchAll();
            $taille=count($seance1)-1;
            $id_m=$seance1[$taille]['id_mod'];
            $type_s=$seance1[$taille]['type'];
            $id_enseignant=$seance1[$taille]['id_ens'];
            
            $test=true;
            
            if (!empty($seance1))
            {
                        
                $sql="SELECT nom_mod FROM module where id_mod='$id_m'";
                $result = $db->prepare($sql);
                $result->execute();
                $mod= $result->fetchAll();
                $nom_mod= $mod[0]['nom_mod'];
            ?>
                        <option value="<?php echo $id_m;?>" selected>
                            <?php
                                echo $nom_mod;
                            ?>
                        </option>
                            <?php
                    
            }else{
                    foreach($modules as $m)
                        {
                            ?>
                            <option value="<?php echo $m['id_mod'];?>">
                            <?php
                                echo $m['nom_mod'];
                            ?>
                        </option>
                            <?php
                    }
                }
                             ?>
        </select>

        <select name="salle" id="salle" title="Selectionner la salle">
            
            <?php
                if (!empty($seance1))
                {   
                ?>
                <option  value ="" disabled selected >SALLE</option>
                <?php
                if($type_s=='cours'){

                    $id_lieux=$seance1[$taille]['id_lieux'];
                    $sql="SELECT lib_lieux FROM lieux where id_lieux='$id_lieux'";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $lieux= $result->fetchAll();
                    $lib_lieux= $lieux[0]['lib_lieux'];

                        {
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo $lib_lieux;
            ?>
</option>
    <?php
        } 
    }
        if($type_s=='td'){
            $id_lieux=$seance1[$taille]['id_lieux'];
            $sql="SELECT lib_lieux,block FROM lieux where id_lieux='$id_lieux'";
            $result = $db->prepare($sql);
            $result->execute();
            $lieux= $result->fetchAll();
            $lib_lieux= $lieux[0]['lib_lieux'];
            $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
    </option>
        <?php
             }
            if($type_s=='tp'){
                $id_lieux=$seance1[$taille]['id_lieux'];
                $sql="select lib_lieux,block from lieux where id_lieux='$id_lieux'  ";
                $result=$db->prepare($sql);
                $result->execute();
                $lieux=$result->fetchAll();
                $lib_lieux= $lieux[0]['lib_lieux'];
                $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
        </option>
            <?php
                 }
                }
    ?>
    <!--  -->
        </select>

        <select name="type" id="type" title="Selectionner le type de la séance">
            <option value="" selected disabled> TYPE</option>
            <?php
                if (!empty($seance1))
                {
                            
                    $type=$seance1[$taille]['type'];
                ?>
                            <option value="<?php echo $type;?>" selected>
                                <?php
                                    echo $type;
                                ?>
                            </option>
                                <?php
                        
                }else{?>

                    <option value="cours">COURS</option>
                    <option value="td">TD</option>
                    <option value="tp">TP</option>

                    <?php
                    }
                    ?>
            
        </select>

        <select name="enseignant" id="enseignant" title="Selectionner un enseignant">
            <?php if (!empty($seance1))
            {   $test=false;
                        
                $sql="SELECT nom_ens,prenom_ens FROM enseignant where id_ens='$id_enseignant'";
                $result = $db->prepare($sql);
                $result->execute();
                $enseignant = $result->fetchAll();
                $nom_ens = $enseignant[0]['nom_ens'];
                $prenom_ens = $enseignant[0]['prenom_ens'];
            ?>
                        <option value="<?php echo $id_enseignant;?>" selected>
                            <?php
                                echo $nom_ens.' '.$prenom_ens;
                            ?>
                        </option>
                            <?php
                    
            }?>
        </select>
        <?php if (!empty($seance1))
            {?>
            <input type="submit" id="12" class="reussi" name="submit" value="Annuler" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
            }else{
                ?>
            <input type="submit" id="12" class="valider" name="submit" value="Valider" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
             }
            ?>
    </form>
</td>
<td class="contenue">
    <form method="POST" action="save.php">
        <select name="module" id="modules" title="Selectionner un module">
            <option value="" selected disabled> MODULE </option>
            <?php 
            $sql="SELECT * FROM seance where id_grp=$groupe and jour='$jour' and heure_debut='13:50:0'";
            $result = $db->prepare($sql);
            $result->execute();
            $seance1 = $result->fetchAll();
            $taille=count($seance1)-1;
            $id_m=$seance1[$taille]['id_mod'];
            $type_s=$seance1[$taille]['type'];
            $id_enseignant=$seance1[$taille]['id_ens'];
            
            $test=true;
            
            if (!empty($seance1))
            {
                        
                $sql="SELECT nom_mod FROM module where id_mod='$id_m'";
                $result = $db->prepare($sql);
                $result->execute();
                $mod= $result->fetchAll();
                $nom_mod= $mod[0]['nom_mod'];
            ?>
                        <option value="<?php echo $id_m;?>" selected>
                            <?php
                                echo $nom_mod;
                            ?>
                        </option>
                            <?php
                    
            }else{
                    foreach($modules as $m)
                        {
                            ?>
                            <option value="<?php echo $m['id_mod'];?>">
                            <?php
                                echo $m['nom_mod'];
                            ?>
                        </option>
                            <?php
                    }
                }
                             ?>
        </select>

        <select name="salle" id="salle" title="Selectionner la salle">
            
            <?php
                if (!empty($seance1))
                {   
                ?>
                <option  value ="" disabled selected >SALLE</option>
                <?php
                if($type_s=='cours'){

                    $id_lieux=$seance1[$taille]['id_lieux'];
                    $sql="SELECT lib_lieux FROM lieux where id_lieux='$id_lieux'";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $lieux= $result->fetchAll();
                    $lib_lieux= $lieux[0]['lib_lieux'];

                        {
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo $lib_lieux;
            ?>
</option>
    <?php
        } 
    }
        if($type_s=='td'){
            $id_lieux=$seance1[$taille]['id_lieux'];
            $sql="SELECT lib_lieux,block FROM lieux where id_lieux='$id_lieux'";
            $result = $db->prepare($sql);
            $result->execute();
            $lieux= $result->fetchAll();
            $lib_lieux= $lieux[0]['lib_lieux'];
            $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
    </option>
        <?php
             }
            if($type_s=='tp'){
                $id_lieux=$seance1[$taille]['id_lieux'];
                $sql="select lib_lieux,block from lieux where id_lieux='$id_lieux'  ";
                $result=$db->prepare($sql);
                $result->execute();
                $lieux=$result->fetchAll();
                $lib_lieux= $lieux[0]['lib_lieux'];
                $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
        </option>
            <?php
                 }
                }
    ?>
    <!--  -->
        </select>

        <select name="type" id="type" title="Selectionner le type de la séance">
            <option value="" selected disabled> TYPE</option>
            <?php
                if (!empty($seance1))
                {
                            
                    $type=$seance1[$taille]['type'];
                ?>
                            <option value="<?php echo $type;?>" selected>
                                <?php
                                    echo $type;
                                ?>
                            </option>
                                <?php
                        
                }else{?>

                    <option value="cours">COURS</option>
                    <option value="td">TD</option>
                    <option value="tp">TP</option>

                    <?php
                    }
                    ?>
            
        </select>

        <select name="enseignant" id="enseignant" title="Selectionner un enseignant">
            <?php if (!empty($seance1))
            {   $test=false;
                        
                $sql="SELECT nom_ens,prenom_ens FROM enseignant where id_ens='$id_enseignant'";
                $result = $db->prepare($sql);
                $result->execute();
                $enseignant = $result->fetchAll();
                $nom_ens = $enseignant[0]['nom_ens'];
                $prenom_ens = $enseignant[0]['prenom_ens'];
            ?>
                        <option value="<?php echo $id_enseignant;?>" selected>
                            <?php
                                echo $nom_ens.' '.$prenom_ens;
                            ?>
                        </option>
                            <?php
                    
            }?>
        </select>
        <?php if (!empty($seance1))
            {?>
            <input type="submit" id="13" class="reussi" name="submit" value="Annuler" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
            }else{
                ?>
            <input type="submit" id="13" class="valider" name="submit" value="Valider" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
             }
            ?>
    </form>
</td>
<td class="contenue">
    <form method="POST" action="save.php">
        <select name="module" id="modules" title="Selectionner un module">
            <option value="" selected disabled> MODULE </option>
            <?php 
            $sql="SELECT * FROM seance where id_grp=$groupe and jour='$jour' and heure_debut='15:0:0'";
            $result = $db->prepare($sql);
            $result->execute();
            $seance1 = $result->fetchAll();
            $taille=count($seance1)-1;
            $id_m=$seance1[$taille]['id_mod'];
            $type_s=$seance1[$taille]['type'];
            $id_enseignant=$seance1[$taille]['id_ens'];
            
            $test=true;
            
            if (!empty($seance1))
            {
                        
                $sql="SELECT nom_mod FROM module where id_mod='$id_m'";
                $result = $db->prepare($sql);
                $result->execute();
                $mod= $result->fetchAll();
                $nom_mod= $mod[0]['nom_mod'];
            ?>
                        <option value="<?php echo $id_m;?>" selected>
                            <?php
                                echo $nom_mod;
                            ?>
                        </option>
                            <?php
                    
            }else{
                    foreach($modules as $m)
                        {
                            ?>
                            <option value="<?php echo $m['id_mod'];?>">
                            <?php
                                echo $m['nom_mod'];
                            ?>
                        </option>
                            <?php
                    }
                }
                             ?>
        </select>

        <select name="salle" id="salle" title="Selectionner la salle">
            
            <?php
                if (!empty($seance1))
                {   
                ?>
                <option  value ="" disabled selected >SALLE</option>
                <?php
                if($type_s=='cours'){

                    $id_lieux=$seance1[$taille]['id_lieux'];
                    $sql="SELECT lib_lieux FROM lieux where id_lieux='$id_lieux'";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $lieux= $result->fetchAll();
                    $lib_lieux= $lieux[0]['lib_lieux'];

                        {
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo $lib_lieux;
            ?>
</option>
    <?php
        } 
    }
        if($type_s=='td'){
            $id_lieux=$seance1[$taille]['id_lieux'];
            $sql="SELECT lib_lieux,block FROM lieux where id_lieux='$id_lieux'";
            $result = $db->prepare($sql);
            $result->execute();
            $lieux= $result->fetchAll();
            $lib_lieux= $lieux[0]['lib_lieux'];
            $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
    </option>
        <?php
             }
            if($type_s=='tp'){
                $id_lieux=$seance1[$taille]['id_lieux'];
                $sql="select lib_lieux,block from lieux where id_lieux='$id_lieux'  ";
                $result=$db->prepare($sql);
                $result->execute();
                $lieux=$result->fetchAll();
                $lib_lieux= $lieux[0]['lib_lieux'];
                $block= $lieux[0]['block'];
            ?>
        <option value="<?php echo $id_lieux;?>" selected>
            <?php
                echo "B".$block.$lib_lieux;
            ?>
        </option>
            <?php
                 }
                }
    ?>
    <!--  -->
        </select>

        <select name="type" id="type" title="Selectionner le type de la séance">
            <option value="" selected disabled> TYPE</option>
            <?php
                if (!empty($seance1))
                {
                            
                    $type=$seance1[$taille]['type'];
                ?>
                            <option value="<?php echo $type;?>" selected>
                                <?php
                                    echo $type;
                                ?>
                            </option>
                                <?php
                        
                }else{?>

                    <option value="cours">COURS</option>
                    <option value="td">TD</option>
                    <option value="tp">TP</option>

                    <?php
                    }
                    ?>
            
        </select>

        <select name="enseignant" id="enseignant" title="Selectionner un enseignant">
            <?php if (!empty($seance1))
            {   $test=false;
                        
                $sql="SELECT nom_ens,prenom_ens FROM enseignant where id_ens='$id_enseignant'";
                $result = $db->prepare($sql);
                $result->execute();
                $enseignant = $result->fetchAll();
                $nom_ens = $enseignant[0]['nom_ens'];
                $prenom_ens = $enseignant[0]['prenom_ens'];
            ?>
                        <option value="<?php echo $id_enseignant;?>" selected>
                            <?php
                                echo $nom_ens.' '.$prenom_ens;
                            ?>
                        </option>
                            <?php
                    
            }?>
        </select>
        <?php if (!empty($seance1))
            {?>
            <input type="submit" id="15" class="reussi" name="submit" value="Annuler" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
            }else{
                ?>
            <input type="submit" id="15" class="valider" name="submit" value="Valider" title="Valider la séance">
            <input type="hidden" name="id_grp" value="<?php echo $groupe?>">
            <?php
             }
            ?>
    </form>
</td>
