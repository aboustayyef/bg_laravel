/*
	When document loads, makes the sections as high as the viewport
 */

$(document).ready(function(){

	$headerHeight = $('#header').outerHeight();
	
	// this function resizes the heights to fit the viewport
	
	$resizeHeights = function(){
		$('.section').each(function(){
			
			// if section is shorter than page, make it the same height	
		
			$desiredPageHeight = $(window).outerHeight() - $headerHeight;
			
			if ($(this).outerHeight() < $desiredPageHeight) {
				$(this).outerHeight($desiredPageHeight);
			};
		});

		// for the home/first page, add back the header height]
		// because we cannot scroll deeper than the top
		
		var $homeHeight = $('#home').outerHeight();
		$('#home').outerHeight($homeHeight + $headerHeight); // 10px = bordertop
	}

	// resize heights when document first loads
	// $resizeHeights();

	// resize heights when window is resized
	// $(window).resize(function(){
	// 	$resizeHeights();
	// });

});


/*
	When window resizes, recalculate heights
 */