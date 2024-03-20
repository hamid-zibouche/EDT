//FONCTION QUI PERMET DE RECUPERER ET D'OUVRIRE LA PAGE PHP 
function getXhr() {
    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
        return xhr;
    } else {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
        return xhr;
    }

}
//METTRE EN ECOUTE TOUS LES FORMULAIRES
var form = document.getElementsByTagName('form');
for (var i = 0; i < form.length; i++) {

    form[i].addEventListener('submit', function(e) {
        var gr = e.target;
        e.preventDefault();
        //RECUPERER L'input DECLUNCHENT DE L'ACTION
        p = e.target.getElementsByTagName('input')[0];
        var class_racine = p.className;
        k = p
        k.className = 'loader';
        k.value = "en cours..."
        console.log()
        p = p.id
        var heure_debut
        var heure_fin
        var x = 0;
        x = parseInt(x);
        //RECUPERER CHAQUE HEURE
        switch (parseInt(p)) {

            case 8:
                heure_debut = parseInt(p) + ":0:0";
                heure_fin = parseInt(p) + 1 + ":0:0";
                break;
            case 9:
                heure_debut = parseInt(p) + ":10:0";
                heure_fin = parseInt(p) + 1 + ":10:0";
                break;

            case 10:
                heure_debut = parseInt(p) + ":20:0";
                heure_fin = parseInt(p) + 1 + ":20:0";
                break;
            case 11:
                heure_debut = parseInt(p) + ":30:0";
                heure_fin = parseInt(p) + 1 + ":30:0";
                break;
            case 12:
                heure_debut = parseInt(p) + ":40:0";
                heure_fin = parseInt(p) + 1 + ":40:0";
                break;
            case 13:
                heure_debut = parseInt(p) + ":50:0";
                heure_fin = parseInt(p) + 1 + ":50:0";
                break;
            case 15:
                heure_debut = parseInt(p) + ":0:0";
                heure_fin = parseInt(p) + 1 + ":0:0";
                break;
        }

        //RECUPERER LES VALEUR DE CHAQUE SELECT
        var f = e.target
        var sem = document.getElementById('sem').value;
        var selects = f.getElementsByTagName("select")
        var m = selects[0].value
        var s = selects[1].value
        var t = selects[2].value
        var e = selects[3].value
            // recuperer l'id du groupe
        var g = gr.children[5].value;
        console.log(g)
            //RECUPERER LA JOURNéE CORESPONDANTE
        var jour = f.getElementsByTagName("input")[0].parentElement.parentElement.parentElement;
        jour = jour.getElementsByTagName("td")[0].innerText;
        console.log(jour);

        xhr1 = getXhr();
        xhr1.onreadystatechange = function(val) {
                val = k;
                if (xhr1.readyState == 4 && xhr1.status == 200) {
                    //LE CONTENU HTML DE LA PAGE SAVE.PHP
                    console.log(xhr1.responseText);
                    if (xhr1.responseText == 0) {
                        k.className = 'valider';
                        k.value = "Valider"
                        console.log(selects[0].value)
                        if (selects[0].value == '') {
                            selects[0].classList.add('border_select');
                            setTimeout(function() {
                                selects[0].classList.remove('border_select');
                            }, 2000)
                        } else if (selects[2].value == '') {
                            selects[2].classList.add('border_select');
                            setTimeout(function() {
                                selects[2].classList.remove('border_select');
                            }, 2000)
                        } else if (selects[1].value == '') {
                            selects[1].classList.add('border_select');
                            setTimeout(function() {
                                selects[1].classList.remove('border_select');
                            }, 2000)
                        } else if (selects[3].value == '') {
                            selects[3].classList.add('border_select');
                            setTimeout(function() {
                                selects[3].classList.remove('border_select');
                            }, 2000)
                        }
                    } else if (xhr1.responseText == 1) {
                        k.className = 'valider';
                        k.value = "Valider";
                        k.title = "Valider la séance"
                        selects[0].value = "";
                        selects[1].innerHTML = (' ');
                        selects[2].value = "";
                        selects[3].innerHTML = (' ');
                        xhr2 = getXhr();
                        xhr2.onreadystatechange = function(val) {
                            if (xhr2.readyState == 4 && xhr1.status == 200) {
                                selects[0].innerHTML = xhr2.responseText;
                                selects[2].innerHTML = '<option value="" selected disabled>TYPE</option><option value="cours">COURS</option><option value="td">TD</option><option value="tp">TP</option>'
                                console.log(xhr2.responseText);
                            }
                        }
                        xhr2.open("POST", "trait_mod.php");
                        xhr2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        //ENVOIE DES VARIABLE A LA PAGE SAVE.PHP
                        xhr2.send("sem=" + sem);

                    } else {
                        k.className = 'reussi';
                        k.value = "Annuler";
                        k.title = "Annuler la séance"

                    }

                    console.log(class_racine);

                }
            }
            //OUVERTURE DE LA PAGE SAVE.PHP EN ARRIERE PLAN
        xhr1.open("POST", "save.php");
        xhr1.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        //ENVOIE DES VARIABLE A LA PAGE SAVE.PHP
        xhr1.send("sem=" + sem + "&cr=" + class_racine + "&jr=" + jour + "&hr_db=" + heure_debut + "&hr_fin=" + heure_fin + "&module=" + m + "&salle=" + s + "&type=" + t + "&enseignant=" + e + "&grp=" + g);



    })


}
//DES SALLE OU AMPHI PAR CHAQUE TYPE(COURS?TD?TP)
var sel = document.querySelectorAll("select[name='type']")
for (var i = 0; i < sel.length; i++) {
    sel[i].addEventListener('change', function(e) {
        var st = e.target;
        var va = st.value;

        p = e.target.parentElement.getElementsByTagName('input')[0];
        p = p.id
        var heure_debut
        var heure_fin
            //RECUPERER CHAQUE HEURE
        switch (parseInt(p)) {

            case 8:
                heure_debut = parseInt(p) + ":0:0";
                heure_fin = parseInt(p) + 1 + ":0:0";
                break;
            case 9:
                heure_debut = parseInt(p) + ":10:0";
                heure_fin = parseInt(p) + 1 + ":10:0";
                break;

            case 10:
                heure_debut = parseInt(p) + ":20:0";
                heure_fin = parseInt(p) + 1 + ":20:0";
                break;
            case 11:
                heure_debut = parseInt(p) + ":30:0";
                heure_fin = parseInt(p) + 1 + ":30:0";
                break;
            case 12:
                heure_debut = parseInt(p) + ":40:0";
                heure_fin = parseInt(p) + 1 + ":40:0";
                break;
            case 13:
                heure_debut = parseInt(p) + ":50:0";
                heure_fin = parseInt(p) + 1 + ":50:0";
                break;
            case 15:
                heure_debut = parseInt(p) + ":0:0";
                heure_fin = parseInt(p) + 1 + ":0:0";
                break;
        }
        console.log(heure_fin, heure_debut)
        jour = e.target.parentElement.parentElement.parentElement.children[0].innerText
        console.log(jour)

        function lieux_type(valeur) {
            valeur = va
            xhr = getXhr();

            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(xhr.responseText)
                    st.parentElement.getElementsByTagName('select')[1].innerHTML = xhr.responseText;
                }
            }

            var sem = document.querySelector('span[id=sem]').innerText

            xhr.open("POST", "select_salle.php")
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('val=' + valeur + "&heure_db=" + heure_debut + "&heure_fn=" + heure_fin + "&jour=" + jour + "&sem=" + sem);



        }
        lieux_type();
    })
}
//DES ENSEIGNANTS PAR CHAQUE MODULES
var mod = document.querySelectorAll("select[name='module']")
for (var i = 0; i < mod.length; i++) {
    mod[i].addEventListener('change', function(e) {
        var st = e.target;
        var va = st.value;

        p = e.target.parentElement.getElementsByTagName('input')[0];
        p = p.id
        var heure_debut
        var heure_fin
            //RECUPERER CHAQUE HEURE
        switch (parseInt(p)) {

            case 8:
                heure_debut = parseInt(p) + ":0:0";
                heure_fin = parseInt(p) + 1 + ":0:0";
                break;
            case 9:
                heure_debut = parseInt(p) + ":10:0";
                heure_fin = parseInt(p) + 1 + ":10:0";
                break;

            case 10:
                heure_debut = parseInt(p) + ":20:0";
                heure_fin = parseInt(p) + 1 + ":20:0";
                break;
            case 11:
                heure_debut = parseInt(p) + ":30:0";
                heure_fin = parseInt(p) + 1 + ":30:0";
                break;
            case 12:
                heure_debut = parseInt(p) + ":40:0";
                heure_fin = parseInt(p) + 1 + ":40:0";
                break;
            case 13:
                heure_debut = parseInt(p) + ":50:0";
                heure_fin = parseInt(p) + 1 + ":50:0";
                break;
            case 15:
                heure_debut = parseInt(p) + ":0:0";
                heure_fin = parseInt(p) + 1 + ":0:0";
                break;
        }
        jour = e.target.parentElement.parentElement.parentElement.children[0].innerText
        console.log(jour)

        function mod_ens(valeur) {
            valeur = va
            xhr = getXhr();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(xhr.responseText)
                    st.parentElement.getElementsByTagName('select')[3].innerHTML = xhr.responseText;
                }
            }
            xhr.open("POST", "select_ens.php")
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send("val=" + valeur + "&heure_db=" + heure_debut + "&heure_fn=" + heure_fin + "&jour=" + jour);
        }
        mod_ens();
    })
}

// var save = document.querySelector('#save');

// save.addEventListener('click', function() {
//     window.location.href = 'emplois_create.php'
// })