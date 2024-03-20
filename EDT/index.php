<?php
session_start();
if (isset($_SESSION['login'])){
    if($_SESSION['type']=='admin')
    header('Location:EDT.php');
    else if($_SESSION['type']=='etd')
    header('Location:etudiant.php');
    else if($_SESSION['type']=='ens')
    header('Location:enseignant.php');
}
include 'connexion.php';
if(isset($_POST['submit']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM utilisateur WHERE login='$login' AND mdp='$password'";
    $result =$db->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0){
        $data=$result->fetchAll();
        $type = $data[0]["type"];
        $id=$data[0]["id_uti"];
        $_SESSION['login']=$data[0]["login"];
        $_SESSION['type']=$type;
        if ($type=='etd'){
            $_SESSION['id']=$id;
            header("Location:etudiant.php");
        }
        else if($type=='ens'){
            $_SESSION['id']=$id;
            header("Location:enseignant.php");
        }
        else{
            $_SESSION['id']=$id;
            header("Location:gestion_emplois_temps.php");
        }
        
    }
    else{
        $_SESSION['notif']='LOGIN OU MOT DE PASSE INCORRECTE';
    }
}

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <link rel="stylesheet" href="style/style.css ?vjhqs">
    <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
    <title>login</title>
</head>

<body>
    <div class="page">
        <aside>

        </aside>
        <main>
            <p>université bejaia</p>
            <h1>Département d'informatique Services des emplois du temps</h1>
            <form method="post" action="">
                <label for="login">veuiller connecter a votre compte</label>
                <input type="text" required name="login" id='login' placeholder="Login">
                <input type="password" required name="password" id='password' placeholder="********">
                <input type="submit" value="Login" name="submit" id="btn-login">
                <?php 
                  if(isset($_SESSION['notif'])){
                    ?>
    
                     <div class='notification'>

                    <p> <?php echo $_SESSION['notif'] ?> </p>

                    </div>
                    <?php 
                        unset($_SESSION['notif']);
                        }
                    ?>
            </form>
            <footer>
                <p>liens externe utile :</p>
                <a href="http://www.universite-bejaia.com">Béjaia université</a>
                <a href="http://www.universite-bejaia.com">E learning université de Béjaia</a>
            </footer>
        </main>


    </div>
</body>

</html>