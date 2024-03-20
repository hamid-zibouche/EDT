<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="application web de gestion de emploi de temps pour département informatique du université Targa Ozmour Béjaia   " />
  <!-- <link rel="icon" href="#" /> -->

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Emploi de temps</title>

  <!-- Bootstrap -->
  <link href="assestsVSC/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../CSSapp/StyleIndex.css">
  <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <header>
    <img src="../imagesSite/image emploi de temps.jpg" alt="image principal" class="imgprincipal" />
    <a href="#" class="logo">Emploi de Temps </a>
    <nav>
      <ul>
        <li><a href="#"> <i class="fa-solid fa-house"></i> Home</a></li>
        <li><a href="#">About </a></li>
        <li><a href="#">Services </a></li>
        <li><a href="#"> Profil</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="login.php"><i class="fa-solid fa-circle-user"></i> Login</a></li>
      </ul>
    </nav>
  </header>

  <section>
    <!-- <div class="logoCl">
      <div class="clock">
        <div class="hour">
          <div class="hr" id="hr"></div>
        </div>
  
        <div class="min">
          <div class="mn" id="mn"></div>
        </div>
  
        <div class="sec">
          <div class="sc" id="sc"></div>
        </div>
      </div>
    </div> -->
    <div class="container">
      <div class="card">
        <div class="box">
          <div class="content">
            <h2><i class="fa-solid fa-user-gear"></i></i></h2>
            <h3>Espace Admin</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea quas,
              recusandae sunt magni itaque atque voluptate aspernatur eius
              cumque debitis blanditiis dolore, earum deleniti magnam, suscipit
              sequi explicabo? Culpa, nam?
            </p>
            </p>
            <a href="#">Accéder à la Page </a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="box">
          <div class="content">
            <h2><i class="fa-solid fa-user-graduate"></i></h2>
            <h3>Espace Etudiant</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea quas,
              recusandae sunt magni itaque atque voluptate aspernatur eius
              cumque debitis blanditiis dolore, earum deleniti magnam, suscipit
              sequi explicabo? Culpa, nam?
            </p>
            <a href="#">Accéder à la Page </a>
          </div>
        </div>
      </div>


      <div class="card">
        <div class="box">
          <div class="content">
            <h2><i class="fa-solid fa-chalkboard-user"></i></h2>
            <h3>Espace Enseignant</h3>
            <p>
              Seulement les enseignants de departement informatique ajouter par
              administrateur pouvant accéder a cet espace après s'authentifier
            </p>
            <a href="gestionEnseignant.php">Accéder à la Page </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <di class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </di>


    <ul class="icon_social">
      <li>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
      </li>
    </ul>
    <ul class="menuFooter">
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Team</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <p>@2022 Laisy Groupe| Copy rights</p>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assestsVSC/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="../JSapp/index.js"></script>
</body>

</html>