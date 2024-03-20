<?php
session_start();

if ($_SESSION['type'] != 'admin')
header('location:../../index.php');


extract($_GET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List des Lieux</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />

    <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="../CSSapp/viewlieux.css?jdii" />
</head>

<body>
    <?php
   include("../inclusion/nav_bar.php");
  ?>

    <div class="container">
    <h2>Liste des Lieux</h2>
        <div class="row pt-0">
            
            <a href="../../apprendre/lieux/addlieux.php">
                <buttun class="btn btn-primary" type="button">
                    Ajouter un Lieux</buttun>
            </a>
            <?php if (isset($notif) and $notif=='erreur') { ?>
          <div class="alert alert-danger" id="notif" role="alert">
            <?php  echo 'Suppression Impossible!!';?>
          </div> <?php }?>
          <?php if (isset($notif) and $notif=='success') { ?>
          <div class="alert alert-success" id="notif" role="alert">
            <?php  echo 'Suppression avec Success';?>
          </div> <?php }?>
        </div>
        <table class=" table table-striped mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Libellet du Lieux</th>
                    <th>Type du Lieux</th>
                    <th>Block</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("connexion.php");
                $resultat=$bdEmploiTemps->query("SELECT * from lieux order by type,block,lib_lieux");
                while($tuple=$resultat->fetch()){ ?>
                <tr>
                    <th scope="row"><?php echo $tuple['id_lieux'] ;?></th>
                    <td><?php echo $tuple['lib_lieux']; ?></td>
                    <td><?php echo $tuple['type']; ?></td>
                    <td><?php echo $tuple['block']; ?></td>
                    <td>
                        <a href="update.php?id_lieux=<?php echo $tuple['id_lieux'];?>"class="m-4">
                            <i class="fa fa-edit fa-1x"></i></a>
                        <i class="fa fa-trash fa-1x red-icon" data-bs-toggle="modal"
                            data-bs-target="#exempleModal<?php echo $tuple['id_lieux'];?>"></i>
                    </td>
                    <div class="modal fade" id="exempleModal<?php echo $tuple['id_lieux'];?>"role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p> Etes vous sur de vouloir supprimer ce Lieux ?</p>
                                </div>
                                <div class="modal-footer">
                                    <buttton type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                        Annuler
                                    </buttton>
                                    <a href="deletelieux.php?id_lieux=<?php echo $tuple['id_lieux'];?>">
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
    <script src="viewliste.js"></script>
</body>

</html>