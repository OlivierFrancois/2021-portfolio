const nav = document.querySelector('nav');
const navItems = document.querySelectorAll('.nav-item');

const btnMenu = document.querySelector('.toggle-nav');
const lines = document.querySelector('.cont-lines');

//Quand on clique sur le bouton, toggle des class pour faire disparaitre le nav
btnMenu.addEventListener('click', () => {
	lines.classList.toggle('active');
	nav.classList.toggle('menu-visible');
})

//Si la largeur de l'écran est < à 1300 px
if (window.matchMedia('(max-width: 1300px)')) {
	// Au clic d'un item du nav, on désactive le nav
	navItems.forEach(item => {
		item.addEventListener('click', () => {
			lines.classList.toggle('active');
			nav.classList.toggle('menu-visible');
		})
	})
}