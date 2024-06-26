function generateurpdf() {
    console.log("pdf")
    var element = document.getElementsByTagName("main")[0];
    var table = document.getElementById("table");
    var opt = {
        margine: 0,
        filename: 'myfile.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'landscape' }
    };

    // New Promise-based usage:
    html2pdf().set(opt).from(element).save();

    // Old monolithic-style usage:
    // html2pdf(element, opt);
}