<?php include_once('Getformations.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="DELETE_Promo.css?visud">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="jquery-3.6.0.js"></script>
    <title>Document</title>
</head>
<body>
<?php include_once('nav_bar.php');?>
    <div class="alert alert-success" id="Error" role="alert"></div>
    <div class="container">
        <div class="formContainer">
         
         <form action="Supprimer_G.php" method="post">
            <h2> Supprimer Une Promotion</h2>
             <div id="input">
   
             <select name="Formation" id="For"required>
                    <option value=""selected disabled> CHOISIR Formation </option> 
                    <?php foreach($formation as $form)     : ?>
                  
                  <option value="<?php echo $form['id_for'];?>"> <?php echo $form['nom_for'];?> </option>
   
                  <?php endforeach ?>
             </select> 
             <select name="semestre" id="sem"required>
                <option value="" selected disabled > CHOISIR SEMESTRE </option>   
               </select>
               <select name="promotion" id="promo" required>
                <option value="" selected disabled > CHOISIR Prommotion </option>   
               </select>
             
           

            
             </div>
             <div class="btn">
         <button id="ajouter"> Supprimer </button>
         <button id="precedent"><a href="#"> Precedent</a></button>
            </div>
         </form>
        </div>
         
       </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
       <script src="DELETE_Promo.js?dcvuu"></script>
</body>
</html>