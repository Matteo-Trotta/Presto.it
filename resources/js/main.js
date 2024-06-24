// Initialization for ES Users
// import { Dropdown, Collapse, initMDB } from "./main.js";

// initMDB({ Dropdown, Collapse });

const navbar =document.querySelector('.navbar');
console.log(navbar)

// window.addEventListener('scroll', ()=>{
    //     if (scrollY>0) {
//         navbar.style.innerHtml = "top:" + 2 + "%";
//     }
// })
// window.onscroll = function() {scrollFunction()};

window.addEventListener('scroll', ()=>{
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else{
        navbar.classList.remove('scrolled')
    }
})