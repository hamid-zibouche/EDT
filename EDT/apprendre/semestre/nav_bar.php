<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    /* background: #f2f2f2; */
    margin-top:80px;
    position: relative;
    background-color: rgb(226, 237, 235);
}

#logo p {
    width: 165px;
    height: 70px;
    margin-left: 5px;
    background: url(./img/Logo-bejaia.png) no-repeat;
    text-indent: 100%;
    overflow: hidden;
    white-space: nowrap;
    margin-bottom: 0;
    position: absolute;
    left: 50px;
}

nav {
    background: black;
    padding-right: 0px;
    position: fixed;
    z-index: 1;
    right: 0;
    width: 100%;
    top: 0;
    height: 70px;
}

nav:after {
    content: "";
    clear: both;
    display: table;
}

nav ul {
    float: right;
    list-style: none;
    margin-right: 40px;
    position: relative;
}

nav ul li {
    /* float: left; */
    display: inline-block;
    margin: 0 3px;
}

nav ul li a {
    background: black;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    line-height: 70px;
    font-size: 15px;
    padding: 8px 15px;
}

nav ul ul {
    background: black;
    position: absolute;
    top: 90px;
    padding:0px;
    opacity: 0;
    visibility: hidden;
    transition: top .3s;
    -webkit-transition: top .3s;
    -moz-transition: top .3s;
    -ms-transition: top .3s;
    -o-transition: top .4s;
}

nav ul li:hover>ul {
    top: 70px;
    opacity: 1;
    visibility: visible;
}

nav ul li a:hover {
    border-radius: 5px;
    box-shadow: 0 0 5px white, 0 0 5px white;
    color: white;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    cursor: default;
}

nav ul ul li {
    position: relative;
    margin: 0;
    float: none;
    display: list-item;
    border-bottom: 1px solid rgba(98, 98, 98, 0.6);
}

nav ul ul li a {
    line-height: 50px;
}

nav ul ul li a:hover {
    color: cyan;
    box-shadow: none;
    cursor: pointer;
}

nav ul ul {
    border-top: 2px solid white;
}

#dex {
    width: 1px;
    background-color: white;
    color: black;
    border-radius: 50px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    -ms-border-radius: 50px;
    -o-border-radius: 50px;
}

#dex:hover {
    width: 1px;
    background-color: white;
    color: black;
    cursor: pointer;
    border-radius: 50px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    -ms-border-radius: 50px;
    -o-border-radius: 50px;
    box-shadow: 0 0 5px white, 0 0 5px white;
}

#logo {
    display: inline;
}

</style>
<nav id="navbar">
        <div id="logo">
            <p>univesite de bejaia</p>
        </div>
        <ul>
            <li><a href="">EDT</a>
                <ul>
                    <li><a href="../../gestion_emplois_temps.php">Gestion des EDTs</a> </li>

                </ul>
            </li>
            <li><a href="">Formation</a>
                <ul>

                    <li><a href="../../siteAppFinal/./phpAet/./viewformation.php">Gestions des formations</a></li>
                    <li><a href="../formation/./ajtformation.php">Ajouter Formation</a></li>
                </ul>
            </li>
            <li><a href="">Semestre</a>
            <ul>
               <li>   <a href="../semestre/./ajtsemestre.php"> Ajouter Semestre </a> </li>
                <li><a href="../semestre/./supsemestre.php">Supprimer Semestre </a> </li>
            </ul>
            <li><a href="">Promotion</a>
                <ul>
                    <li><a href="../../Ajouter_Promo/./Ajouter_P.php">Ajouter Promotion</a></li>
                    <li><a href="../../DELETE_Promo/./DELETE_Promo.php">Supprimer Promotion</a></li>
                </ul>
            </li>
           </li>
            <li><a href="">Section</a>
             <ul>
                    <li><a href="../../Ajout_Section/./Ajt_Sec.php">Ajouter Section</a></li>
                    <li><a href="../../Del_Sec/./Del_Sec.php">Supprimer Section</a></li>
                </ul>
            </li>
            <li><a href="">Groupe</a>
            <ul>
                <li><a href="../../Ajout_Groupe/./Ajouter_G.php">Ajouter Groupe</a></li>
                <li><a href="../../DELETE_Groupe/./del_G.php">Supprimer Groupe</a></li>
            </ul>
        </li>
        <li><a href="">Enseignant</a>
                <ul>
                <li><a href="../../gestionENS/./listeENS.php">Liste Enseignants</a></li>
                    <li><a href="../../gestionENS/./CreateEns.php">Ajouter un Enseignant</a></li>
                    <li><a href="">Disponibilité</a></li>
                    <li><a href="">Module enseignés</a></li>
                </ul>
            </li>
            <li><a href="">Etudiant</a>
                <ul>
                    <li><a href="../../siteAppFinal/./phpAet/./viewEtudiant.php">Gestion des Etudiants</a></li>
                    <li><a href="../../siteAppFinal/./phpAet/./gestionEnseignant.php">Ajouter un Etudiant</a></li>
                </ul>
            </li>
            
            <li><a href="">Module</a>
                <ul>
                    <li><a href="">Ajouter Module</a></li>
                    <li><a href="">Supprimer Module</a></li>
                </ul>
            </li>
            <li><a href="">Lieux</a>
                <ul>
                     <li><a href="../../siteAppFinal/./phpAet/./viewlieu.php">Liste Lieux</a></li>
                    <li><a href=".././lieux/./addLieux.php">Ajouter lieux</a></li>
                   
                </ul>
            </li>
        
            <li><a id="dex" href="../../deconnexion.php">Logout</a></li>
        </ul>
    </nav>
