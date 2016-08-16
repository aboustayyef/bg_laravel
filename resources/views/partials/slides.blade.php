<?php
	$all_slides = ["reference_silver_088.jpg", "laptops-and-couch.jpg", "kanaha_003.jpg", "miro-2.jpg", "morrison_00.jpg", "milieu_chefbuero.jpg", "interstuhl_ambient_yellow.jpg", "vista_74_75.jpg", "reference_airpad_01.jpg"];
	$slides_to_show = array_rand($all_slides, 4);
?>

<div class="slideshow__wrapper" data-slide-0="sanders_003.jpg" @foreach ($slides_to_show as $i => $slide_number) data-slide-{{$i}}="{{$all_slides[$slide_number]}}" @endforeach>

	<div class="slideshow__info">
		<div class="layout__inner">
			<h2 class="slideshow__header utlity__nomargins">Modern, Tasteful &amp;&nbsp;Durable</h2>
			<p class="slideshow__text">Ghana's top destination for premium home and office furniture</p>					
			<div class="slideshow__button_container navigation__link nobackground">
				<a href="#contact" menuanchor="contact" class="on-modal slideshow__button" data-modal="contact-modal">
					Find Us
				</a>					
			</div>
		</div>
	</div>

</div>
