// function generateurpdf() {
//     var element = document.getElementById("container_p");

//     var opt = {
//         margine: 0,
//         filename: 'myfile.pdf',
//         image: { type: 'jpeg', quality: 0.98 },
//         html2canvas: { scale: 2 },
//         jsPDF: { unit: 'in', format: 'a3', orientation: 'landscape' }
//     };


//     html2pdf().set(opt).from(element).save();

// }

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

var printe = document.getElementById("print")

printe.addEventListener("click", function() {

    var sem = document.getElementById("sem").innerText
    var s
    console.log(sem)
    if (sem == 'SEMESTRE 2') {
        console.log("s2")
        s = 's2'
    } else if (sem == 'SEMESTRE 1') {
        console.log("s1")
        s = 's1'
    }
    xhr = getXhr();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(xhr.responseText)

            var element = xhr.responseText;

            var opt = {
                margine: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a3', orientation: 'portrait' }
            };


            html2pdf().set(opt).from(element).save();

        }
    }
    xhr.open("POST", "impression_ens.php")
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('s=' + s);


})

var sem = document.getElementById("sem").innerText
var s1 = document.getElementById("s1")
var s2 = document.getElementById("s2")
var s
console.log(sem)
if (sem == 'SEMESTRE 2') {
    console.log("s2")
    s = 's2'
    s2.style.boxShadow = '0 0 5px white, 0 0 5px white';

    console.log(s2)

} else if (sem == 'SEMESTRE 1') {
    console.log("s1")
    s = 's1'
    s1.style.boxShadow = '0 0 5px white, 0 0 5px white';

    console.log(s1)


}