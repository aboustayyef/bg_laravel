$(document).ready(function(){

/*
	Functions
 */

	var turnOffModal = function(e){
		$('body').removeClass('noscroll');
		$('.modalpage').removeClass('active');
	}

	var turnOnModal = function(which_modal, e){
		if (!$('body').hasClass('noscroll')) {
			$('body').addClass('noscroll');
		};
		if (!$('#'+ which_modal).hasClass('active')) {
			$('#'+ which_modal).addClass('active');
			// Adjust window height to enable scrolling
			$('.modalpage.active').outerHeight($(window).height() - 100 );
		};
	}


/*
	Events
 */

	$('.on-modal').on('click', function(e){
        e.preventDefault();
		turnOnModal($(this).data('modal'));
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
