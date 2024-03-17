let menuBtn = document.getElementById('menu');
let closeBtn = document.getElementById('nav-close');
let navbar = document.getElementById('navbar');

menuBtn.addEventListener('click', () => {
    navbar.classList.add('shownavbar')
})
closeBtn.addEventListener('click', () => {
    navbar.classList.remove('shownavbar')
})