var formation_input = document.getElementById('For');
var semestre_input = document.getElementById('sem');
var promo_input = document.getElementById('promo');
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

btn.addEventListener('click', delG);

function delG(e) {
    e.preventDefault();

    var id_promo = promo_input.value; //recuperer l'id de la promo
    console.log(id_promo)
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {
            var result = xhr.responseText;
            console.log(xhr.responseText);

            if (result == 0) {

                error.innerHTML = "vueillez saisire tous les champs! ";
                error.style.display = 'block';
            } else if (result == 1) {

                error.innerHTML = "suppression reussi ! ";
                error.style.display = 'block';

                const myTimeout = setTimeout(refresh, 2000);

                function refresh() {
                    location.href = "DELETE_Promo.php";
                }

            } else {
                error.innerHTML = " suppression impossible ! "
                error.style.display = 'block'
            }

            console.log(result);
        }
    }
    xhr.open('POST', 'DeleteGroupe.php', true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send("idP=" + id_promo);
};