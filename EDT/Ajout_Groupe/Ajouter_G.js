var formation_input = document.getElementById('For');
var semestre_input = document.getElementById('sem');
var promo_input = document.getElementById('promo');
var section = document.getElementById('sec');
var libG = document.getElementById('lib_grp');
var ajt = document.getElementById('ajouter');

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

ajt.addEventListener('click', insert_grp)

function insert_grp(e) {
    e.preventDefault();
    var lib_grp = libG.value; //libelle du groupe
    section_id = section.value; // recuperer l'id de la section
    console.log(lib_grp);
    console.log(section_id);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {
            var result = xhr.responseText;

            console.log(xhr.responseText);
            if (result == 0) {
                error.innerHTML = "vueillez remplire tous les champs!";
                error.style.display = 'block';

            } else if (result == 1) {

                error.innerHTML = "Ajout reussi ! ";
                error.style.display = 'block';

                const myTimeout = setTimeout(refresh, 2000);

                function refresh() {
                    location.href = 'ajouter_G.php';
                }

            } else {
                error.innerHTML = "Ajout impossible !"
                error.style.display = 'block';
            }

        }

    }
    xhr.open('POST', 'insert_grp.php', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send("idS=" + section_id + "&libG=" + lib_grp);

};