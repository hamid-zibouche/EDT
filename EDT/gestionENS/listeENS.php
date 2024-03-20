<?php
session_start();
if ($_SESSION['type'] != 'admin')
header('location:../../index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List des enseignants </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />

    <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="styleListEns.css?jjj" />
</head>

<body>
    <?php
   include("nav_bar.php");
  ?>

    <div class="container">
    <div class="form-group mb-3">
              <div class="h5 text-center">
             <h2> List des Enseignants</h2>
              </div>
            </div>
        <div class="row pt-0">
            
            <a href="CreateEns.php">
                <buttun class="btn btn-primary" type="button">
                    Ajouter un Enseignant</buttun>
            </a>
        </div>
        <table class=" table table-striped mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom complet</th>
                    <th>Email</th>
                    <th>Date naissance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("../connexion.php");
                $resultat=$db->query("SELECT * from enseignant");
                while($tuple=$resultat->fetch()){ ?>
                <tr>
                    <th scope="row"><?php echo $tuple['id_ens'] ;?></th>
                    <td ><?php echo $tuple['nom_ens']." ".$tuple['prenom_ens'] ;?></td>
                    <td><?php echo $tuple['email_ens']; ?></td>
                    <td><?php echo $tuple['date_naiss_ens']; ?></td>
                    <td>
                        <a href="updateEns.php?id_ens=<?php echo $tuple['id_ens'];?>"class="m-4">
                            <i class="fa fa-edit fa-1x"></i></a>
                        <i class="fa fa-trash fa-1x red-icon" data-bs-toggle="modal"
                            data-bs-target="#exempleModal<?php echo $tuple['id_ens'];?>"></i>
                    </td>
                    <div class="modal fade" id="exempleModal<?php echo $tuple['id_ens'];?>"role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p> Etes vous sur de vouloir supprimer cette enseignant ?</p>
                                </div>
                                <div class="modal-footer">
                                    <buttton type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                        Annuler
                                    </buttton>
                                    <a href="deleteEns.php?id_ens=<?php echo $tuple['id_ens'];?>">
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
</body>

</html>