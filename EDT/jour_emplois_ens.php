<tr>
    <td>
        SAMEDI
    </td>
    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='SAMEDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='SAMEDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
            
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='SAMEDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='SAMEDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='SAMEDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='SAMEDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='SAMEDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='SAMEDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='SAMEDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='SAMEDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }


            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='SAMEDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='SAMEDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='SAMEDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='SAMEDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10')";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
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
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='DIMANCHE' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='DIMANCHE' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
            
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='DIMANCHE' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='DIMANCHE' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='DIMANCHE' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='DIMANCHE' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='DIMANCHE' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='DIMANCHE' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='DIMANCHE' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='DIMANCHE' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }


            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='DIMANCHE' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='DIMANCHE' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='DIMANCHE' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='DIMANCHE' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10')";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>
    
</tr>

<!-- lundi -->
<tr>
    <td>
        LUNDI
    </td>
    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='LUNDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='LUNDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
            
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='LUNDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='LUNDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='LUNDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='LUNDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='LUNDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='LUNDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='LUNDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='LUNDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }


            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='LUNDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='LUNDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='LUNDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='LUNDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10')";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>
    
</tr><!-- mardi -->
<MARDI>
    <td>
        MARDI
    </td>
    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='MARDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='MARDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
            
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='MARDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='MARDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='MARDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='MARDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='MARDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='MARDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='MARDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='MARDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }


            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='MARDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='MARDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='MARDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='MARDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10')";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>
<!-- mercredi -->
<tr>
    <td>
        MERCREDI
    </td>
    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='MERCREDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='MERCREDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
            
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='MERCREDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='MERCREDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='MERCREDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='MERCREDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='MERCREDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='MERCREDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='MERCREDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='MERCREDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }


            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='MERCREDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='MERCREDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='MERCREDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='MERCREDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10')";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>
    
</tr><!-- jeudi -->
<tr>
    <td>
        JEUDI
    </td>
    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='JEUDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='8:0:0' and jour='JEUDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
            
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='JEUDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='9:10:0' and jour='JEUDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>
    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='JEUDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='10:20:0' and jour='JEUDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' ) ";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php
        if($s=='s1'){ 
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='JEUDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='11:30:0' and jour='JEUDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }
            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='JEUDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='12:40:0' and jour='JEUDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }


            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='JEUDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='13:50:0' and jour='JEUDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>    <td>
        <div>
        <?php 
        if($s=='s1'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='JEUDI' and(lib_sem='S1' or lib_sem='S3' or lib_sem='S5' or lib_sem='S7' or lib_sem='S9' )";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }else if($s=='s2'){
            $sql="select id_grp,id_mod,id_lieux,type from seance where id_ens=$id and
            heure_debut='15:0:0' and jour='JEUDI' and(lib_sem='S2' or lib_sem='S4' or lib_sem='S6' or lib_sem='S8' or lib_sem='S10')";
            $result=$db->prepare($sql);
            $result->execute();
            $seance=$result->fetchAll();
            include 'include_emplois_temps.php';
        }

            ?>
        </div>
    </td>
    
</tr>