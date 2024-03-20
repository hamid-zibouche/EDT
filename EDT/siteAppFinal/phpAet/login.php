<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- cette lien permet  d'ajouter icones  sous form code html il faut juste télécharger dan site  font Awesome/cdn.js -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="../CSSapp/stylelogin.css" />
    <title>login up and login in</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin_signup">
          <form action="" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nom d'utilisateur" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de pass" />
            </div>
            <input type="submit" value="Se connecter" class="btn solid" />
            <!-- <p class="social-text">OR sign with social platforms</p>

            <div class="s           ocial-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>

          <form action="" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nom d'utilisateur" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de pass" />
            </div>
            <input type="submit" value="S'inscrire" class="btn solid" />
            <!-- <p class="social-text">OR sign up with social platforms</p>

            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Vous êtes nouveau ici ?</h3>
            <p>
             Pour accéder au différents fonctionnalités de notre site inscrivez-vous !
            </p>
            <button class="btn transparent" id="sign-up-btn">S'inscrire</button>
            <img src="../imagesSite/undraw_booked_re_vtod.svg"  class="image" alt="image emploi de temps">


          </div>
        </div>

        <div class="panel right-panel">
            <div class="content">
              <h3>Vous êtes un de nous ?</h3>
              <p>
             Connectez-vous pour accéder aux différents espace de notre site qui vous permet de visiter votre emploi de temps quel soit votre année universitaire .
              </p>
              <button class="btn transparent" id="sign-in-btn">Se connecter</button>
              <img src="../imagesSite/undraw_hire_re_gn5j.svg"  class="image" alt="image left-panel">
              
  
            </div>
      </div>
    </div>
    <script src="../JSapp/login.js"></script>
  </body>
</html>
