<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    /* background: #f2f2f2; */
    /* margin-top: 100px;
    position: relative; */
    background-color: rgb(226, 237, 235);
}

#logo p {
    width: 165px;
    height: 70px;
    margin-left: 5px;
    background: url(img/Logo-bejaia.png) no-repeat;
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
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
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
<nav>
        <div id="logo">
            <p>univesite de bejaia</p>
        </div>
        <ul>
            <!-- 
            <li><a>EDT</a>
                <ul>
                    <li><a href="../gestion_emplois_temps.php">Gestion des EDTs</a> </li>
                    <li><a >Creé un EDT</a> </li>

                </ul>
            </li>
            <li><a href="">Formation</a>
                <ul>

                    <li><a href="">Gestions des formations</a></li>
                    <li><a href="">Ajouter Formation</a></li>
                </ul>
            </li>
            <li><a href="">Semestre</a></li>
            <li><a>Section</a>
                <ul>
                    <li><a href="./Ajout_Section/Ajt_Sec.php">Ajouter Section</a></li>
                    <li><a href="./Del_Sec/Del_Sec.php">Supprimer Section</a></li>
                </ul>
            </li>
            <li><a href="">Groupe</a></li>
            <li><a href="">Salle</a>
                <ul>
                    <li><a href="">Ajouter</a></li>
                    <li><a href="">Supprimer</a></li>
                </ul>
            </li>
            <li><a href="">Module</a>
                <ul>
                    <li><a href="">Ajouter</a></li>
                    <li><a href="">Supprimer</a></li>
                </ul>
            </li>
            <li><a href="">Etudiant</a>
                <ul>
                    <li><a href="./siteAppFinal/phpAet/viewEtudiant.php">Gestion des Etudiantes</a></li>
                    <li><a href="./siteAppFinal/phpAet/gestionEnseignant.php">Ajouter un Etudiant</a></li>
                </ul>
            </li>
            <li><a href="">Enseignant</a>
                <ul>
                    <li><a href="./gestionENS/listeEns.php">Liste Enseignants</a></li>
                    <li><a href="./gestionENS/CreateEns.php">Ajouter un Enseignant</a></li>
                    <li><a href="">Disponibilité</a></li>
                    <li><a href="">Module enseignés</a></li>
                </ul>
            </li>
            <li><a href="">Utilisateur</a>
                <ul>
                    <li><a href="">Gestion des UTLs</a></li>
                    <li><a href="">Ajouter un UTL</a></li>
                    <li><a href="">Recherche</a></li>
                </ul>
            </li> -->
            <li><a id='dex' href="deconnexion.php">Logout</a></li>
        </ul>
    </nav>
