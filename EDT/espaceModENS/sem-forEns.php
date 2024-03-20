<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />

    <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
   
    <link rel="icon" href="../img/favicon.ico" type="image/png" />
    <!-- jquery link  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Ajouter enseignant</title>
  </head>
  <body>
    <?php
      include('nav_bar.php');
    ?>
    
      <div class="row  justify-content-center" style="margin-top :200px;">
        <div class="col-sm-4 col-sm-push-3 monoBlock">
          <form
            action="ajouterENS.php"
            method="post"
            class="bg-white p-4 shadow"
          >
            <div class="form-group mb-3">
              <div class="h5 text-center">
                Veulliez choisir Formation et Semestre
              </div>
            </div>
            <select class="form-select form-select-lg mb-4" aria-label=".form-select-lg example" id="idformation" name="selectfor">
                <option selected>choisir Formation</option>
                <?php 
                require("../connexion.php");
                
                $resultat= $db->query("SELECT * FROM formation");
                while($tuple=$resultat->fetch()){
              echo '<option value="'.$tuple['id_for'].'"  >'.$tuple['nom_for'].'</option>';
                }
                ?>
              </select>

              <select class="form-select form-select-lg mb-4" aria-label=".form-select-lg example" id="idsemestre" name="selectsem">
                <option selected>choisir semestre</option>
                
              </select>
            
              <div class="d-grid gap-2">
                <button class="btn btn-dark" type="submit" name="afficher">Afficher </button>
              
              </div>
              
             
          </form>
        </div>
      </div>
 
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="sem-for.js"></script>
  </body>
</html>
