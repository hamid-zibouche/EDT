<tr>
    <td>
        SAMEDI
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='8:0:0' and jour='SAMEDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='9:10:0' and jour='SAMEDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='10:20:0' and jour='SAMEDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='11:30:0' and jour='SAMEDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='12:40:0' and jour='SAMEDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='13:50:0' and jour='SAMEDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='15:0:0' and jour='SAMEDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    
</tr>

<!-- dimanche -->
<tr>
    <td>
        DIMANCHE
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='8:0:0' and jour='DIMANCHE'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='9:10:0' and jour='DIMANCHE'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='10:20:0' and jour='DIMANCHE'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='11:30:0' and jour='DIMANCHE'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='12:40:0' and jour='DIMANCHE'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='13:50:0' and jour='DIMANCHE'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='15:0:0' and jour='DIMANCHE'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    
</tr>

<!-- LUNDI -->

<tr>
    <td>
        LUNDI
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='8:0:0' and jour='LUNDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='9:10:0' and jour='LUNDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='10:20:0' and jour='LUNDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='11:30:0' and jour='LUNDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='12:40:0' and jour='LUNDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='13:50:0' and jour='LUNDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='15:0:0' and jour='LUNDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    
</tr>

<!-- MARDI -->

<tr>
    <td>
        MARDI
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='8:0:0' and jour='MARDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='9:10:0' and jour='MARDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='10:20:0' and jour='MARDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='11:30:0' and jour='MARDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='12:40:0' and jour='MARDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='13:50:0' and jour='MARDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='15:0:0' and jour='MARDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    
</tr>

<!-- MERDCREDI -->

<tr>
    <td>
        MERCREDI
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='8:0:0' and jour='MERCREDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='9:10:0' and jour='MERCREDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='10:20:0' and jour='MERCREDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='11:30:0' and jour='MERCREDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='12:40:0' and jour='MERCREDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='13:50:0' and jour='MERCREDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='15:0:0' and jour='MERCREDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    
</tr>

<!-- JEUDI -->
<tr>
    <td>
        JEUDI
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='8:0:0' and jour='JEUDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='9:10:0' and jour='JEUDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='10:20:0' and jour='JEUDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='11:30:0' and jour='JEUDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='12:40:0' and jour='JEUDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='13:50:0' and jour='JEUDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    <td>
        <div>
        <?php 
            $sql="select id_ens,id_mod,id_lieux,type from seance where id_grp=$groupe and
            heure_debut='15:0:0' and jour='JEUDI'";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            
            if (count($seance)>0){
                $id_ens=$seance[0]['id_ens'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select nom_ens,prenom_ens from enseignant where id_ens=$id_ens";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_ens=$result[0]['nom_ens'].' '.$result[0]['prenom_ens'];

                $sql="select nom_mod from module where id_mod=$id_mod";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_mod=$result[0]['nom_mod'];

                $sql="select lib_lieux,block,type from lieux where id_lieux=$id_lieux";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_lieux=$result[0]['lib_lieux'];
                $block=$result[0]['block'];
                $typ=$result[0]['type'];
        ?>
        
        <p><span><span>Module: </span><?php echo $nom_mod; ?></span></p>
        <p><span><span>Prof: </span><?php echo $nom_ens?></span></p>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
        <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?>
                            
                     </span></p>
        <?php }?>
        </div>
    </td>
    
</tr>