const nav = document.querySelector('nav');
const btnMenu = document.querySelector('.toggle-nav');
const lines = document.querySelector('.cont-lines');

//Quand on clique sur le bouton, toggle des class pour faire disparaitre le nav
btnMenu.addEventListener('click', () => {
	lines.classList.toggle('active');
	nav.classList.toggle('menu-visible');
})