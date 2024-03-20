var formation_input = document.getElementById('For');
var semestre_input = document.getElementById('sem');
var promo_input = document.getElementById('promo');
var section = document.getElementById('sec');
var groupe = document.getElementById('grp');
var btn = document.getElementById('ajouter');

var error = document.getElementById('Error');
formation_input.addEventListener("change", loadSemestre);

function loadSemestre(e) {
    var formation = e.target.value;
    console.log(formation);

    //var params = formation; 
    var xhr = new XMLHttpRequest();


    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {
            // console.log('apres')
            console.log(xhr.responseText)
            var sem = xhr.responseText

            document.getElementById('sem').innerHTML = sem;

        }

    }
    xhr.open('POST', 'getSem1.php', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send("formation=" + formation);
};

semestre_input.addEventListener('change', loadpromo);

function loadpromo(e) {

    var semest = e.target.value;
    console.log(semest);


    var xhr = new XMLHttpRequest();


    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {

            console.log(xhr.responseText)
            var pro = xhr.responseText

            document.getElementById('promo').innerHTML = pro;

        }

    }
    xhr.open('POST', 'getPromo.php', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send("idS=" + semest);

};

promo_input.addEventListener('change', loadSection)

function loadSection(e) {
    var ipPromo = e.target.value;
    console.log(ipPromo);


    var xhr = new XMLHttpRequest();


    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {

            console.log(xhr.responseText)
            var sec = xhr.responseText

            document.getElementById('sec').innerHTML = sec;

        }

    }
    xhr.open('POST', 'GetSection.php', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send("idp=" + ipPromo);

};

section.addEventListener('change', loadGroupe);

function loadGroupe(e) {
    id_sec = e.target.value; //recuperer l'id de section
    console.log(id_sec);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {

            console.log(xhr.responseText)
            var grp = xhr.responseText
            groupe.innerHTML = grp;


        }
    }
    xhr.open('POST', 'GetGroupe.php', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send("idS=" + id_sec);
};
btn.addEventListener('click', delG);

function delG(e) {
    e.preventDefault();

    var id_grp = groupe.value; //recuperer l'id du groupe
    console.log(id_grp)
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {
            var result = xhr.responseText;
            console.log(xhr.responseText);

            if (result == 0) {

                error.innerHTML = "veuillez saisire tous les champs!  ";
                error.style.display = 'block';
            } else if (result == 1) {

                error.innerHTML = "suppression reussi ! ";
                error.style.display = 'block';

                const myTimeout = setTimeout(refresh, 2000);

                function refresh() {
                    location.href = "del_G.php";
                }

            } else {
                error.innerHTML = "suppression impossible !</h1>"
                error.style.display = 'block'
            }


        }
    }
    xhr.open('POST', 'DeleteGroupe.php', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send("idG=" + id_grp);
};