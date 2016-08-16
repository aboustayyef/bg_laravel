// <img> 
$(document).ready(function(){
	$('img.lazy').each(function(){
		$(this).attr('src', $(this).data('src')).removeClass('lazy')
	})
});

// background
$(document).ready(function(){
	$('.lazy_bg').each(function(){
		$(this).css('background-image', "url(" + $(this).data('src') + ")").removeClass('lazy_bg');
	})
});