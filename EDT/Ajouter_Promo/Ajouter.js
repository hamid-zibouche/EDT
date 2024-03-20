var formation_input = document.getElementById('For');
var semestre_input = document.getElementById('sem');
var promo_input = document.getElementById('promo');
var ajt = document.getElementById('ajouter');


formation_input.addEventListener("change",loadSemestre);
function loadSemestre(e){
    var formation =  e.target.value;
    console.log(formation);
    
    var xhr = new XMLHttpRequest();
    
    
    xhr.onreadystatechange =function() {
        if(xhr.status == 200 && xhr.readyState==4){
            console.log('apres')
        console.log(xhr.responseText)
        var sem = xhr.responseText
    
    document.getElementById('sem').innerHTML= sem;
    
          }
          
        }
    xhr.open('POST','getSem.php',true); 
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.send("form="+formation);
    
    }; 

    semestre_input.addEventListener("change",loadPromo);
    function loadPromo(e){
        var semest =  e.target.value;
        console.log(semest);
        
        
        var xhr = new XMLHttpRequest();
        
        
        xhr.onreadystatechange =function() {
            if(xhr.status == 200 && xhr.readyState==4){
              
            console.log(xhr.responseText)
            var pro = xhr.responseText
        
        document.getElementById('promo').innerHTML= pro;
        
              }
              
            }
        xhr.open('POST','getPromo1.php',true); 
        xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhr.send("idS="+semest);
        
        }; 

        ajt.addEventListener("click",sendIDP);
         function sendIDP(e){
         // e.preventDefault();
          var lib = document.getElementById('sec').value ;  
            var IDP = document.getElementById('promo').value;
            var grp =document.getElementById('nbr_groupe').value;
         console.log(IDP); 
         console.log(lib);

          
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange =function() {
            if(xhr.status == 200 && xhr.readyState==4){
                console.log(xhr.responseText);
                 
        }
    }

    xhr.open('POST','Variable.php',true); 
        xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhr.send("idpromo="+IDP+"&lib_S="+lib+"&nbrG="+grp);
        
        }; 