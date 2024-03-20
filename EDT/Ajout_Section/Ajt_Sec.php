<?php include_once('Getformations.php'); ?>
<?php // include_once('Variable.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Sec_.css?iiig">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="jquery-3.6.0.js"></script>
    <title>Document</title>
</head>
<body>
    <?php include_once('nav_bar.php');?>
    <?php 
    //if(isset($_POST['promo']) && isset($_POST['libel_sec']) && isset($_POST['nbr_groupe']) ){
       // include_once('Variable.php');  
    //}
    
    ?>
    
    <div class="container">
     <div class="formContainer">
      
          <div class="alert alert-success" id="Error" role="alert"></div> 
          
      <form action="Ajt_Sec.php" method="post">
      <h2> Ajouter une section</h2>
          <div id="input">

          <select name="Formation" id="For"required>
                 <option value=""selected disabled> CHOISIR Formation </option> 
                 <?php foreach($formation as $form)     : ?>
               
               <option value="<?php echo $form['id_for'];?>"> <?php echo $form['nom_for'];?> </option>

               <?php endforeach ?>
          </select> 
          <select name="semestre" id="sem"required>
             <option value="CHOISIR_SEMESTRE " selected disabled > CHOISIR SEMESTRE </option>   
            </select>
            <select name="promotion" id="promo" required>
             <option value="CHOISIR_promotion " selected desabled > CHOISIR Prommotion </option>   
            </select>
            <input type="text" name="lib_sec" required id="sec"  placeholder="Libelle Section" required/>
            <input type="number" name="nbr_grp" min="1" required  placeholder="Nombre du Groupe" id="nbr_groupe" required />
          </div>
          <div class="btn">
      <button id="ajouter"> Ajouter </button>
      <button id="precedent"><a href="#"> Précédent</a></button>
         </div>
      </form>
     </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="Ajouter.js?fgviidd"></script>
</body>
</html>