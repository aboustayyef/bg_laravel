<?php
	$all_slides = ["laptops-and-couch.jpg", "reference_silver_088.jpg", "miro-2.jpg", "morrison_00.jpg", "milieu_chefbuero.jpg", "interstuhl_ambient_yellow.jpg", "vista_74_75.jpg", "sanders_Letto_001.jpg", "reference_airpad_01.jpg"];
	$slides_to_show = array_rand($all_slides, 4);
?>
<section class="section is-paddingless">

<div class="main-carousel">
	<div class="carousel-cell carousel-bg-image" data-flickity-bg-lazyload="{{asset('/img/slides/lennox_soft_2016_002.jpg')}}"></div>
	@foreach($slides_to_show as $slide)
		<div class="carousel-cell carousel-bg-image" data-flickity-bg-lazyload="{{asset('/img/slides/' . $all_slides[$slide] )}}"></div>
	@endforeach
</div>
</section>

