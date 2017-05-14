const toggleButton = document.getElementsByClassName('nav-toggle')[0];
const navMenu = document.getElementsByClassName('nav-menu')[0];
toggleButton.addEventListener('click', function(e){
	toggleButton.classList.toggle('is-active');
	navMenu.classList.toggle('is-active');
});