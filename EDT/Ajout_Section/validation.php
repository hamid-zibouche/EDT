<?php include_once('MySql.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Validation.css">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_POST['promo']) && isset($_POST['libel_sec']) && isset($_POST['nbr_groupe']) ) { include_once('Variable.php') ;  ?>
       
    

    <div class="container">
        <div class="formContainer">
        
         <h1>  section Ajouteé <img src="checked.png"> </h1>
             <div class="btn">
         <button id="precedent"><a href="Ajt_Sec.PHP"> Ajouter une Section</a></button>
            </div>
        </div>
       </div>
       <?  } else {  include_once('Ajt_Sec.php'); ?>
       
        
        <h1>  </h1>

        <?php }   ?>
       
   
</body>
</html>