let reste =document.querySelector(".reste")
let burger=document.querySelector(".boss")
let  fab=document.querySelector(".fab")
let titre=document.querySelector(".titre")
console.log(titre)

burger.addEventListener("click",()=>{
    titre.style.display="none"
    reste.style.display= "block" ;
    burger.style.display="none"
    if (window.innerWidth<600) {
        burger.style.display="none"
     }
})

let croix =document.querySelector(".croix")

croix.addEventListener("click",()=>{
  burger.style.display="flex"
    reste.style.display= "none" ;   
   
})

let Omra20255=document.querySelector(".Omra20255")
let goos2=document.querySelector(".goos2")
console.log(goos2)
let passtext = document.querySelector(".passtext");
console.log(passtext)
goos2.addEventListener("mouseover", (e) => {
    passtext.style. display= "flex";

    Omra20255.style.visibility = "hidden";
});


 

