require('smoothscroll-polyfill').polyfill();

// Choose Nav elements which have scrolling behavior
// They are given the class 'sectionscroll'

const scrollableMenuitems = document.getElementsByClassName('sectionscroll');

// iterate and assign each a click behavior to scroll to element specified in the data-dest attribute

for (var item of Array.from(scrollableMenuitems)) {
  item.addEventListener('click', function(e){
  	e.preventDefault();
  	const tgt = e.target.dataset.dest;
  	console.log(e.target);
  	// scroll to destination
  	document.querySelector(tgt).scrollIntoView({ behavior: 'smooth' });

  	// Turn Off Menu in Mobile
  	bg_menu.turnoff();
  });
}