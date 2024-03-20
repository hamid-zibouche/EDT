
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Del_sec.css?sqfoomj" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="jquery-3.6.0.js"></script>
    <title>Document</title>
</head>
<body>
   
    
<?php
include_once('sec_var.php');
?>
<?php include_once('nav_bar.php');?>

    <div class="container">
        <div class="formContainer">
        <div class="alert alert-success" id="Error" role="alert"></div> 
         <form action="Del_Sec.php" method="post">
             <div class="input">
             <h2> Supprimer section</h2>
             <select name="Formation" id="For" required>
                 <option value=""selected disabled> CHOISIR Formation </option>    

                 <?php foreach($formation as $form)     : ?>
               
                <option value="<?php echo $form['nom_for'] ?> "> <?php echo $form['nom_for'] ?> </option>

                <?php endforeach ?>
            
             </select>

             <select name="semestre" id="sem"required>
             <option value="CHOISIR_SEMESTRE " selected disabled > CHOISIR SEMESTRE </option>   
            </select>

            <select name="promotion" id="promo"required>
             <option value="CHOISIR_promotion " selected desabled > CHOISIR Prommotion </option>   
            </select>

            <select name="section" id="sec"required>
                <option value="" selected desabled > CHOISIR section </option>   
               </select>

            </div>
             <div class="btn">
                <button id="supprimer"> Supprimer <i class="fa fa-close"></i> </button>
                <button id="precedent"><a href="#"> <i class="fa fa-mail-reply"></i> Precedent </a></button>
                   </div>
                </form>  
              </div>
             </div>
                 </div>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>  
    <script src="Del_Sec.js?auioiiu" ></script>
</body>
</html>