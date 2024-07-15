// Script for navigation bar
window.onscroll = function() {myFunction()};
    
    var menu = document.getElementById("header");
    var sticky = menu.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        menu.classList.add("sticky");
      } else {
        menu.classList.remove("sticky");
      }
    }


const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
  bar.addEventListener('click', () =>{
    nav.classList.add('active');
  })
}
if (close) {
  close.addEventListener('click', () =>{
    nav.classList.remove('active');
  })
}
