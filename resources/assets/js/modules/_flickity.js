// Flickity
const Flickity = require('flickity-imagesloaded'); 
require('flickity-bg-lazyload');

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
	// options
	cellAlign: 'left',
	imagesLoaded: true,
	autoPlay: true,
	bgLazyLoad: 2,
	contain: true,
	selectedAttraction: 0.015,
	wrapAround: true
});