const scrollableMenuitems = document.getElementsByClassName('sectionscroll');
for (var item of scrollableMenuitems) {
  item.addEventListener('click', function(e){
  	const tgt = e.target.dataset.dest;

  	// scroll to destination
  	document.querySelector(tgt).scrollIntoView({ behavior: 'smooth' });
  });
}