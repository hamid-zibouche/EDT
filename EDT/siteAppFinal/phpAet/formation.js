setTimeout(() => {
    const  notif = document.getElementById("notif");
    const parent=notif.parentElement
    console.log(parent.children[1])
    parent.removeChild(parent.children[1])
  }, 3000);