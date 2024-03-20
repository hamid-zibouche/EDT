const selectType = document.getElementById("selectType");
const selectBlock = document.getElementById("selectBlock");


console.log(parent)
selectType.addEventListener("change", function() {
  if (selectType.value == "amphi") {
    selectBlock.className="hidden"
    selectBlock.value=1;
  } else {
    selectBlock.classList.remove("hidden");
  }

});

setTimeout(() => {
  const  notif = document.getElementById("notif");
  const parent=notif.parentElement
  console.log(parent.children[0])
  parent.removeChild(parent.children[0])
  
}, 3000);