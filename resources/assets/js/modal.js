$(document).ready(function(){

/*
	Functions
 */

	var toggleModal = function(e){
		$('body').toggleClass('noscroll');
		$('#modalpage').toggleClass('active');
	}

	var turnOffModal = function(e){
		$('body').removeClass('noscroll');
		$('#modalpage').removeClass('active');
	}

	var turnOnModal = function(e){
		if (!$('body').hasClass('noscroll')) {
			$('body').addClass('noscroll');
		};
		if (!$('#modalpage').hasClass('active')) {
			$('#modalpage').addClass('active');
		};
	}


/*
	Events
 */

	$('.on-modal').on('click', function(){
		turnOnModal();
	});

	$('.off-modal').on('click', function(){
		turnOffModal();
	});

	// if someone clicks on a navigation item that is not contacts, turn off modal
	$('.navigation__link').on('click', function(){
		if($(this).find('a').attr('href') != "#contact"){
			turnOffModal();
		};
	});

	// escape key removes modal
	$(document).keyup(function(e){
		if (e.keyCode == 27) {
			turnOffModal();
		};
	});
});
