$(document).ready(function(){
	var fullSlides = [
		"/img/slides/reference_silver_088.jpg",
		"/img/slides/laptops-and-couch.jpg",
		"/img/slides/sanders_Letto_001.jpg",
		"/img/slides/miro-2.jpg",
		"/img/slides/morrison_00.jpg",
		"/img/slides/milieu_chefbuero.jpg",
		"/img/slides/interstuhl_ambient_yellow.jpg",
		"/img/slides/vista_74_75.jpg",
		"/img/slides/reference_airpad_01.jpg"
	];

	// Todo: replace with low-res version
	var mobileSlides = [
		"/img/slides/reference_silver_088.jpg",
		"/img/slides/laptops-and-couch.jpg",
		"/img/slides/kanaha_003.jpg",
		"/img/slides/miro-2.jpg",
	]

	var slides;
	if (window.outerWidth < 601) {
		slides = mobileSlides;
	}else{
		slides = fullSlides;
	}

	var currentSlide = 0;
	var slidesNumber = slides.length;
	var $container = $('.slideshow__wrapper');

	// preload first few images
	$("<img />").attr("src", slides[0]);
	$("<img />").attr("src", slides[1]);
	$("<img />").attr("src", slides[2]);

	var nextSlide = function(slides){
		currentSlide = (currentSlide + 1) % slidesNumber;
		$container.css('background-image', "url(" + slides[currentSlide] + ")");

		// preload next image
		$("<img />").attr("src", slides[(currentSlide+1) % slidesNumber])
	}

	setTimeout(function(){
		console.log('go');
		setInterval(function(){nextSlide(slides)}, 5000);
	}, 10000);


});