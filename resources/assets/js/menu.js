/*

	Basic Menu Behavior
	Activate clicked on menu item. Deactivate active one
 
 */

$(document).ready(function(){

	var linkSelector = '.navigation__link';

	var goToSection = function(sectionName){
		
		// first, activate menu item:

		// remove active state from other menu item
		$(linkSelector+'.active').removeClass('active');	

		// make clicked on item active
		$('[menuanchor="' + sectionName + '"]').addClass('active');

		// skip scrolling to section if section is "contact"
		if (sectionName == 'contact') { return };

		// now slide to wanted section;
		var $headerHeight = $('#header').outerHeight();
		var $targetTop = $('#'+sectionName).offset().top - $headerHeight;

		$('html, body').animate({
		        scrollTop: $targetTop
		}, 500);
	}

	/*
		manage internal section browsing
	 */

	$(linkSelector).on('click',function(e){

		// prevent default action
		e.preventDefault();

		var sectionName = $(this).attr('menuanchor');

		goToSection(sectionName);

		$('.navigation').removeClass('active');

	});

	/*
		Slideshow button
	 */
	
	$('slideshow__button').on('click', function(e){
		e.preventDefault();
		goToSection($())
	})

	/*
		ToNameggle Mobile Menu
	 */

	 $('.navigation__mobile_toggle').on('click', function(){
	 	$('nav').toggleClass('active');
	 });

});