$(document).ready(function(){
	var fullSlides = [
		"../img/slides/reference_silver_088.jpg",
		"../img/slides/sanders_003.jpg",
		"../img/slides/kanaha_003.jpg",
		"../img/slides/morrison_00.jpg",
		"../img/slides/white-silver-power-office.jpg",
		"../img/slides/movy_is_3_003.jpg",
		"../img/slides/tower_evo_44_45.jpg",
		"../img/slides/interstuhl_ambient_yellow.jpg",
		"../img/slides/vista_74_75.jpg",
	];

	var mobileSlides = [
		"../img/slides/lowres_interstuhl_ambient_yellow.jpg"
	]

	if (window.outerWidth < 601) {
		var slides = mobileSlides;
	}else{
		var slides = fullSlides;
	}

	// Slideshow at top
	$(".slideshow__slides").backstretch(
		slides, {
	  	duration: 4000,
	  	fade: 950
	  });

	// Projects Section
	$('#projects').backstretch('../img/projects_background.jpg');

});