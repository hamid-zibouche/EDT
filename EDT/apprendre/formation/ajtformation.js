setTimeout(() => {
    ntf=document.getElementById("notif");
    console.log(ntf)
    prt=ntf.parentElement
    ntf.remove()
    console.log(prt)
   
},2000);