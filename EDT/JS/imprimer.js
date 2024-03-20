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
    var groupe = document.getElementById("groupe")
    console.log(groupe.value)
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
    xhr.open("POST", "impression.php")
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send("groupe=" + groupe.value);


})