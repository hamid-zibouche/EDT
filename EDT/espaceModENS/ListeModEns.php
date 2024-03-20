<?php
require("../connexion.php");

// if (isset($_POST['Afficher'])) {
   
//     $modules =$_POST['modules'];
//    $idEns=$_POST['selectEns'];
//    // echo $modules;
//    foreach ($modules as $module) {
//     // echo 'id module'.$module;
//     // echo 'id ens:' .$idEns;
  
//     $sql="INSERT into  ens_mod  values ('$module','$idEns')";
//     $result=$db->prepare($sql);
//     $result->execute();
    
// } 
// if ($result) {
//     $message=" Insertion reussie avec succès";
   
// } else {
//     $erreur="erreur d'insertion a la base ";
// }

// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List des etudiants</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />

    <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="stylelisteEM.css" />
</head>

<body>
    <?php
   include("../nav_bar.php");
  ?>

    <div class="container">
    <?php  if (isset($message)) { ?>
          <div class="alert alert-success  h5 text-center" role="alert">
            <?php  echo $message;?>
          </div> <?php }?>
  <!-- le cas ou il y'a une erreur -->
           <?php if (isset($erreur)) { ?>
          <div class="alert alert-danger h5 text-center" role="alert" >
            <?php  echo 'erreur de suppression' ;?>
          </div> <?php }?>
    <h2> Liste des modules affecté pour les enseignants </h2>
        <div class="row pt-0">
            
            <a href="sem-forEns.php">
                <buttun class="btn btn-primary" type="button">
                    affecté modules pour enseignant</buttun>
            </a>
        </div>
        <table class=" table table-striped mt-3">
            <thead>
                <tr>
                    <th>Module</th>
                    <th>Nom enseignant</th>
                    <th>semsetre </th>
                    <th>Formation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("../connexion.php");
                $resultat=$db->prepare("SELECT * from ens_mod  INNER JOIN enseignant  ON ens_mod.id_ens =  enseignant.id_ens
                INNER JOIN module  ON ens_mod.id_mod = module.id_mod INNER join semestre on semestre.id_sem= module.id_sem 
                INNER join formation on semestre.id_for= formation.id_for");
                $resultat->execute(); 
                while($tuple=$resultat->fetch()){ ?>
                <tr>
                    <th scope="row"><?php echo $tuple['nom_mod'] ;?></th>
                    <td ><?php echo $tuple['nom_ens']." ".$tuple['prenom_ens'] ;?></td>
                    <td><?php echo $tuple['lib_sem']; ?></td>
                    <td><?php echo $tuple['nom_for']; ?></td>
                    <td>
                        <i class="fa fa-trash fa-1x red-icon" data-bs-toggle="modal"
                            data-bs-target="#exempleModal<?php echo $tuple['id_ens'];?>"></i>
                    </td>
                    <div class="modal fade" id="exempleModal<?php echo $tuple['id_ens'];?>" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p> Etes vous sur de vouloir supprimer cette etudiant ?</p>
                                </div>
                                <div class="modal-footer">
                                    <buttton type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                        Annuler
                                    </buttton>
                                    <a href="deleteModEns.php?id_ens=<?php echo $tuple['id_ens'] ;?>&id_mod=<?php echo $tuple['id_mod'] ;?>">
                                        <button class="btn btn-danger" type="button">
                                            Confirmer
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="jsListeEM.js"></script>
</body>

</html>