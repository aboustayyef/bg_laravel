$(document).ready(function(){
	$('#fullpage').fullpage(
	{
		anchors:['home', 'lb_collection', 'brands', 'projects', 'contact'],
		menu:'#lbmenu',
		controlArrows:true,
		keyboardScrolling: true,
		fitToSection:true,
		autoScrolling:false,
		animateAnchor:false,
	}
	);
});