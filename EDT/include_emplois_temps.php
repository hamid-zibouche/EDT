<?php
if (count($seance)>0){
    
                $id_grp=$seance[0]['id_grp'];
                $id_mod=$seance[0]['id_mod'];
                $id_lieux=$seance[0]['id_lieux'];
                $type=$seance[0]['type'];

                $sql="select lib_grp from groupe where id_grp=$id_grp";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $lib_grp=$result[0]['lib_grp'];
                
                

                $sql="select id_sec from groupe where id_grp=$id_grp";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $id_sec=$result[0]['id_sec'];

                $sql="select id_pro from section where id_sec=$id_sec";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $id_pro=$result[0]['id_pro'];

                $sql="select id_sem from promotion where id_pro=$id_pro";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $id_sem=$result[0]['id_sem'];

                $sql="select id_for from semestre where id_sem=$id_sem";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $id_for=$result[0]['id_for'];

                $sql="select nom_for from formation where id_for=$id_for";
                $result=$db->prepare($sql);
                $result->execute();
                $result=$result->fetchAll();
                $nom_for=$result[0]['nom_for'];

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
        <p><span><span>formation: </span><?php echo $nom_for?></span></p>
        <?php if ($type!='cours'){?><p><span><span>Groupe: </span><?php echo $lib_grp?></span></p><?php }?>
        <p><span><span>Type: </span><?php echo $type?></span> <span>
            <span>Salle: </span><?php if ($typ!='amphi') echo "B".$block.$lib_lieux; else echo $lib_lieux?></span></p>
        <?php }?>