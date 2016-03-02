$(document).ready(function(){
	$('img.lazy').each(function(){
		$(this).attr('src', $(this).data('src')).removeClass('lazy')
	})
})