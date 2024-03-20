var formation_input = document.getElementById('For');
var semestre_input = document.getElementById('sem');
var lib_prom = document.getElementById('lib_prom');
var ajtBTN = document.getElementById('ajouter');
var error = document.getElementById('Error');

formation_input.addEventListener("change", loadSem);

function loadSem(e) {
    var formation = e.target.value;
    var xhr = new XMLHttpRequest();


    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {

            var sem = xhr.responseText

            semestre_input.innerHTML = sem;

        }

    }
    xhr.open('POST', 'getSem.php', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send("form=" + formation);



};
ajtBTN.addEventListener("click", insert);

function insert(e) {
    e.preventDefault();

    var IDS = document.getElementById('sem').value; // id section
    var libP = document.getElementById('lib_prom').value; // libelle promotion
    var annee = document.getElementById('annee_pro').value; // annee promo

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {
            console.log(xhr.responseText);
            console.log(xhr.responseText);
            var result = xhr.responseText;

            if (result == 0) {

                error.innerHTML = "veuillez remplire tous les champs!  ";
                error.style.display = 'block';
            } else if (result == 1) {

                error.innerHTML = "Ajout reussi !";
                error.style.display = 'block';

                const myTimeout = setTimeout(refresh, 2000);

                function refresh() {
                    location.href = "ajouter_P.php";
                }

            } else {
                error.innerHTML = " suppression impossible ! "
                error.style.display = 'block';
            }

        }
    }

    xhr.open('POST', 'Variable.php', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send("idSec=" + IDS + "&libP=" + libP + "&annee=" + annee);

};