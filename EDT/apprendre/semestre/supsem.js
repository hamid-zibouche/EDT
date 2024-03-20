var formation=document.getElementById("fr");
formation.addEventListener('change',load);
function load(e){
    var form=e.target.value;
    console.log(form);
    var xhr=new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if (xhr.status==200 && xhr.readyState==4) {
            var sem=xhr.responseText;
            var rec=document.getElementById('sem');
            console.log(rec)
            rec.innerHTML=sem;
        }
    }
    xhr.open('post','getsemestre.php',true);
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.send("form="+form);
};
var btn=document.getElementById('sup');
btn.addEventListener('click',suprimer);
function suprimer(e){
 e.preventDefault();
    var idsem=document.getElementById('sem').value
    var xhr=new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if (xhr.status==200 && xhr.readyState==4) {
            var sem1=xhr.responseText;
            //var rec=document.getElementById('sem');
            console.log(idsem)
            console.log(sem1)
                if (sem1=='1'){
                
                location.href='supsemestre.php?message=success'
                
                }else if(sem1==""){
                    var diver = document.getElementById("msgE_C")
                    diver.style.display='block'
                    console.log(diver)
                    setTimeout(() => {
                       diver.style.display='none'
                     }, 2000);
                }
                else{
                    var diver = document.getElementById("msgE_S")
                    diver.style.display='block'
                    console.log(diver)
                    setTimeout(() => {
                        diver.style.display='none'
                      }, 2000);
                }
            // history.go();
            // 
            // div.innerHTML= sem1;
            // div.style.display='block';
            //rec.innerHTML=sem;
        }
    }
    xhr.open('post','sup2.php',true);
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.send("idsem="+idsem);
};

setTimeout(() => {
    notif = document.getElementById("msgS");
    parent=notif.parentElement
    console.log(parent.children[0])
    parent.removeChild(parent.children[0])
    
  }, 2000);

 