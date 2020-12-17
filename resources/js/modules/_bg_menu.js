window.bg_menu = {
	toggleButton: document.getElementsByClassName('nav-toggle')[0],
	navMenu: document.getElementsByClassName('nav-menu')[0],

	toggle: function(){
		this.toggleButton.classList.toggle('is-active');
		this.navMenu.classList.toggle('is-active');
	},

	turnoff: function(){
		this.toggleButton.classList.remove('is-active');
		this.navMenu.classList.remove('is-active');
	}
}

bg_menu.toggleButton.addEventListener('click', function(e){
	bg_menu.toggle();
});