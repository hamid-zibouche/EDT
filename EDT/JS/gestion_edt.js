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
var selects = document.querySelectorAll("select[name=section]");

for (var i = 0; i < selects.length; i++) {
    selects[i].addEventListener("change", function(e) {
        s_section = e.target
        s_groupe = s_section.parentElement.parentElement.children[4].firstElementChild
        session = s_section.parentElement.parentElement.children[2].innerText
        semestre = s_section.parentElement.parentElement.children[1].innerText
        section = s_section.value
        formation = s_section.parentElement.parentElement.className

        xhr = getXhr();
        xhr.onreadystatechange = function(val) {
                val = s_groupe
                if (xhr.readyState == 4 && xhr.status == 200) {
                    //LE CONTENU HTML DE LA PAGE SAVE.PHP
                    console.log(xhr.responseText);
                    val.innerHTML = xhr.responseText;

                }
            }
            //OUVERTURE DE LA PAGE SAVE.PHP EN ARRIERE PLAN
        xhr.open("POST", "gs.php");
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        //ENVOIE DES VARIABLE A LA PAGE SAVE.PHP
        xhr.send("sec=" + section + "&sem=" + semestre + "&for=" + formation + "&ses=" + session);


    })
}

// var icon = document.getElementsByTagName('i');

// for (var i = 0; i < icon.length; i++) {
//     icon[i].addEventListener('click', function(e) {
//         e.preventDefault();
//         console.log(e.target)
//         i = e.target
//         if (i.className == "fas fa-pencil-alt") {
//             s_groupe = i.parentElement.parentElement.parentElement.parentElement.children[4].firstElementChild.value
//             session = i.parentElement.parentElement.parentElement.parentElement.children[2].innerText
//             semestre = i.parentElement.parentElement.parentElement.parentElement.children[1].innerText
//             section = i.parentElement.parentElement.parentElement.parentElement.children[3].firstElementChild.value
//             formation = i.parentElement.parentElement.parentElement.parentElement.className
//             console.log(formation)
//             xhr = getXhr();
//             xhr.onreadystatechange = function(val) {

//                 if (xhr.readyState == 4 && xhr.status == 200) {
//                     //LE CONTENU HTML DE LA PAGE SAVE.PHP
//                     console.log(xhr.responseText);
//                     input = i.parentElement.parentElement.children[0]
//                     input.value = xhr.responseText
//                     console.log(input)
//                 }
//             }

//             xhr.open("POST", "essie.php");
//             xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//             //ENVOIE DES VARIABLE A LA PAGE SAVE.PHP
//             xhr.send("sec=" + section + "&sem=" + semestre + "&for=" + formation + "&ses=" + session + "&grp=" + s_groupe);

//         }


//     })

// }
var selects = document.querySelectorAll("select[name=groupe]");

for (var i = 0; i < selects.length; i++) {

    selects[i].addEventListener("change", function(e) {

        s_groupe = e.target
        s_section = s_groupe.parentElement.parentElement.children[3].firstElementChild
        section = s_section.value
        session = s_groupe.parentElement.parentElement.children[2].innerText
        semestre = s_groupe.parentElement.parentElement.children[1].innerText
        groupe = s_groupe.value
        formation = s_groupe.parentElement.parentElement.className
        console.log(session, section, semestre, groupe, formation)
        xhr = getXhr();
        xhr.onreadystatechange = function() {

                if (xhr.readyState == 4 && xhr.status == 200) {
                    //LE CONTENU HTML DE LA PAGE SAVE.PHP
                    console.log(xhr.responseText);
                    input = s_groupe.parentElement.parentElement.children[5].firstElementChild.firstElementChild
                    input.value = xhr.responseText
                }
            }
            //OUVERTURE DE LA PAGE SAVE.PHP EN ARRIERE PLAN
        xhr.open("POST", "essie.php");
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        //ENVOIE DES VARIABLE A LA PAGE SAVE.PHP
        xhr.send("sec=" + section + "&sem=" + semestre + "&for=" + formation + "&ses=" + session + "&grp=" + groupe);


    })
}

var sels_sec = document.querySelectorAll("select[name=section]");

for (var i = 0; i < sels_sec.length; i++) {
    sels_sec[i].addEventListener("change", function(e) {
        e.target.parentElement.parentElement.children[5].children[0].children[0].value = ''

    })
}

var i_consult = document.querySelectorAll('i[class="far fa-calendar-alt"]')

for (var i = 0; i < i_consult.length; i++) {
    i_consult[i].addEventListener("mouseover", function(e) {

        var id_grp = e.target.parentElement.parentElement.children[0].value
        var select_G = e.target.parentElement.parentElement.parentElement.parentElement.children[4].children[0]
        var select_S = e.target.parentElement.parentElement.parentElement.parentElement.children[3].children[0]
        if (select_S.value != '' && select_G.value != '') {

            console.log('hover')
            xhr = getXhr();
            xhr.onreadystatechange = function() {

                    if (xhr.readyState == 4 && xhr.status == 200) {
                        console.log(xhr.responseText);
                        if (xhr.responseText == 0) {
                            e.target.title = "planning Vide!"
                        } else {
                            e.target.title = "Consulter planning nombre seance(" + xhr.responseText + ")"
                        }
                    }
                }
                //OUVERTURE DE LA PAGE hover_planning.PHP EN ARRIERE PLAN
            xhr.open("POST", "hover_planning.php");
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            //ENVOIE DES VARIABLE A LA PAGE SAVE.PHP
            xhr.send("grp=" + id_grp);

        }
    })
    i_consult[i].addEventListener("click", function(e) {
        var id_grp = e.target.parentElement.parentElement.children[0].value
        var select_G = e.target.parentElement.parentElement.parentElement.parentElement.children[4].children[0]
        var select_S = e.target.parentElement.parentElement.parentElement.parentElement.children[3].children[0]

        if (select_S.value != '' && select_G.value != '') {

            window.location = 'view_EDT.php?groupe=' + id_grp

        } else {
            console.log(select_S.value)

            if (select_S.value == '') {

                select_S.classList.add('border')
                window.setTimeout(function() {

                    select_S.classList.remove('border')
                    console.log('section')

                }, 2000)
            } else if (select_G.value == '') {

                select_G.classList.add('border')
                select_S.classList.remove('border')
                window.setTimeout(function() {

                    select_G.classList.remove('border')
                    console.log('section')

                }, 2000)
                console.log('grp')
            }
        }
    })
}


var boite = document.querySelector(".client-fenetre-confirmation .boite");

document.querySelector(".client-fenetre-confirmation .boite-header .fermer").addEventListener("click", fermer_c);
document.querySelector(".client-fenetre-confirmation .boite .boite-btns .annuler").addEventListener("click", fermer_c);
document.querySelector(".client-fenetre-confirmation").addEventListener("click", fermer_c);

function fermer_c() {
    var fenetre = document.querySelector(".client-fenetre-confirmation");

    fenetre.setAttribute("aria-hidden", "true");
    window.setTimeout(function() {
        fenetre.style.display = "none";
        fenetre.removeAttribute("aria-hidden");
    }, 100)
}
boite.addEventListener("click", function(e) { // pour que quand on clique sur le formulaire (la boite) cette derniere ca se ferme pas
    e.stopPropagation();


});

var icon_suprim = document.querySelectorAll('i[class="far fa-trash-alt"]')

icon_suprim.forEach(e => {
    e.addEventListener("click", function(e) {
        var select_G = e.target.parentElement.parentElement.parentElement.parentElement.children[4].children[0]
        var select_S = e.target.parentElement.parentElement.parentElement.parentElement.children[3].children[0]

        if (select_S.value != '' && select_G.value != '') {

            var text = document.querySelector('.text')
            text.innerText = 'Voulez-vous vraiment vider le plannig de la section ' + select_S.value + ' groupe ' + select_G.value + ' ??'
            var fenetre = document.querySelector(".client-fenetre-confirmation");
            fenetre.style.display = "flex"

            var oui = document.querySelector('.oui')
            oui.addEventListener('click', function() {
                var id_grp = e.target.parentElement.parentElement.children[0].value
                location.href = 'delete_planning.php?groupe=' + id_grp
                console.log(e.target.parentElement.parentElement)


            })

        } else {
            console.log(select_S.value)

            if (select_S.value == '') {

                select_S.classList.add('border')
                window.setTimeout(function() {

                    select_S.classList.remove('border')
                    console.log('section')

                }, 2000)
            } else if (select_G.value == '') {

                select_G.classList.add('border')
                select_S.classList.remove('border')
                window.setTimeout(function() {

                    select_G.classList.remove('border')
                    console.log('section')

                }, 2000)
                console.log('grp')
            }
        }


    })
});

var alert = document.querySelector('.alert')
setTimeout(function() {
    alert.style.display = 'none'
}, 3000)