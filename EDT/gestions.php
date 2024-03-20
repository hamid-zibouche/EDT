<?php 
include 'connexion.php';

$sql ="select id_groupe from edt ";
$result = $db->prepare($sql);
$result->execute();
$id_groupe=$result->fetchAll();

$sql="select id_for,nom_for from formation";
$result = $db->prepare($sql);
$result->execute();
$formation=$result->fetchAll();

foreach($formation as $formation){
    $sql="select id_for,id_sem,lib_sem,date_debut from semestre where id_for=$formation[id_for]";
    $result = $db->prepare($sql);
    $result->execute();
    $sem=$result->fetchAll();
    ?>
    
    <tr id="formation_name">
           <td colspan="6"> <?php echo $formation['nom_for'];?> </td>       
    </tr>
    <?php
        foreach ($sem as $sem){
                
            $sql ="select * from promotion where id_sem=$sem[id_sem] order by id_pro desc ";
            $result = $db->prepare($sql);
            $result->execute();
            $promo=$result->fetchAll(); 
                
            if(!empty($promo)){
    ?>
             <tr class="<?php echo $formation['nom_for'];?>">
            
                <td><?php 
                    switch($sem['lib_sem']){
                        case 'S1' : echo 'L1' ;
                        break;
                        case 'S2' : echo 'L1' ;
                        break;
                        case 'S3' : echo 'L2' ;
                        break;
                        case 'S4' : echo 'L2' ;
                        break;
                        case 'S5' : echo 'L3' ;
                        break;
                        case 'S6' : echo 'L3' ;
                        break;
                        case 'S7' : echo 'M1' ;
                        break;
                        case 'S8' : echo 'M1' ;
                        break;
                        case 'S9' : echo 'M2' ;
                        break;
                        case 'S10': echo 'M2' ;
                        break;
                    }
                    
                ?></td>
                <td>
                    <?php echo $sem['lib_sem'];?>
                </td>
                <td>
                    <?php echo $promo[0]['annee'];?>
                </td>
        
                <?php 
                    $pro=$promo[0]['id_pro'];
                    $sql ="select * from section where id_pro=$pro order by lib_sec asc";
                    $result = $db->prepare($sql);
                    $result->execute();
                    $sec=$result->fetchAll(); 

                    $nbr_sec=count($sec);

                ?>
                <td>
                 <select  name="section" title="Selectionner la Section">
                     <option value="" disabled selected>Section</option>
                    <?php
                    foreach ($sec as $sec){
                    ?>
                    <option value="<?php echo $sec['lib_sec']?>">
                    <?php
                      echo "$sec[lib_sec]";;
                    }?>
                 </select>
                </td>
                <td>
                    <select name="groupe" title="Selectionner le Groupe"></select>
                </td>

                <td> 
                <form action="edt.php" method="post">
                    <input type="hidden" name="groupe" value="">         
                    <a title ='Consulter planning'><i class="far fa-calendar-alt"></i></a>
                    <button ><i title ='Editer planning' class="fas fa-pencil-alt"></i></button>
                    <a><i title ='Vider planning' class="far fa-trash-alt"></i></a>
            
                </form>  
            </td>
            <?php 
                }
            ?>
            
            
             </tr>
            
    <?php 
            }
        } 

    ?>