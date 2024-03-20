 var formation_input = document.getElementById('For');
 var error = document.getElementById('Error');

 formation_input.addEventListener("change", loadSemestre);

 function loadSemestre(e) {
     error.style.display = 'none';
     var formation = e.target.value;
     console.log(formation);

     var params = formation;
     var xhr = new XMLHttpRequest();


     xhr.onreadystatechange = function() {
         if (xhr.status == 200 && xhr.readyState == 4) {
             console.log('apres')
             console.log(xhr.responseText)
             var sem = xhr.responseText

             document.getElementById('sem').innerHTML = sem;

         }

     }
     xhr.open('POST', 'getForm_ID.php', true);
     xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
     xhr.send("form=" + formation);

 };

 var semestre_input = document.getElementById('sem');
 semestre_input.addEventListener("change", loadPromo);

 function loadPromo(e) {
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
     xhr.open('POST', 'getPromo1.php', true);
     xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
     xhr.send("idS=" + semest);

 };

 var section_input = document.getElementById('promo');
 section_input.addEventListener("change", loadSection);

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

 var btn = document.getElementById('supprimer');
 btn.addEventListener("click", DelSec);

 function DelSec(e) {
     e.preventDefault();
     var id_section = document.getElementById('sec').value;
     console.log(id_section);

     var xhr = new XMLHttpRequest();
     xhr.onreadystatechange = function() {
         if (xhr.status == 200 && xhr.readyState == 4) {

             var result = xhr.responseText;

             console.log(result);
             if (result == 0) {

                 error.innerHTML = "veuillez remplire tous les champs!";
                 error.style.display = 'block';
             } else if (result == 1) {

                 error.innerHTML = "suppression reussi ! ";
                 error.style.display = 'block';

                 const myTimeout = setTimeout(refresh, 2000);

                 function refresh() {
                     location.href = "Del_Sec.php";
                 }

             } else {
                 error.innerHTML = "suppression impossible !"
                 error.style.display = 'block';
             }

         }
     }
     xhr.open('POST', 'DeleteSec.php', true);
     xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
     xhr.send("idSec=" + id_section);
 };