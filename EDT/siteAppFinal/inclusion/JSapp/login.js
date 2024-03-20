const barSignIn=document.querySelector("#sign-in-btn");
const barSignUp=document.querySelector("#sign-up-btn");
const container =document.querySelector(".container");

barSignUp.addEventListener('click',() =>{
    container.classList.add("sign-up-mode");
});

barSignIn.addEventListener('click',() =>{
    container.classList.remove("sign-up-mode");
});