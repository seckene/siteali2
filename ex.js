let reste =document.querySelector(".reste")
let burger=document.querySelector(".boss")
let  fab=document.querySelector(".fab")
let titre=document.querySelector(".titre44")
let navb=document.querySelector("nav")

let croix =document.querySelector(".croix")

let Omra20255=document.querySelector(".Omra20255")
let goos2=document.querySelector(".goos2")

let passtext = document.querySelector(".passtext");
console.log(navb)

console.log(goos2)
console.log(passtext)

// window.addEventListener("scroll",()=>{
//     if(window.scrollY<100){

// navb.style.background="rgba(20, 20, 20, 0.322)"
// navb.style.border = "2px solid rgba(255, 255, 255, 0.05)";
// navb.style.boxShadow = "0 4px 30px rgba(0, 0, 0, 0.5)";
// navb.style.backdropFilter = "blur(2.5px)";
// navb.style.borderBottomLeftRadius = "1rem";
// navb.style.borderBottomRightRadius = "1rem";
// navb.style.zIndex = "1";
// navb.style.width = "100%";
// navb.style.position = "fixed";


//     }
    
// })


burger.addEventListener("click",()=>{
   
    reste.style.display= "block" ;
    
    burger.style.display="none"
    if (window.innerWidth<600) {
        burger.style.display="none"
     }
})


croix.addEventListener("click",()=>{
  burger.style.display="flex"
    reste.style.display= "none" ;   
   
})

goos2.addEventListener("mouseover", (e) => {
    passtext.style. display= "flex";

    Omra20255.style.visibility = "hidden";
});


 

