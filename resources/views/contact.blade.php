@extends('layouts.main')

@section('title')
Contact Us
@stop

@section('content')
<div class="pageWrapper">
	@include('contact.navigation')
	
	<div class="section">
		<div class="container">
			<h2 id="contact" class="section__title bump">Contact us</h2>
		<h2 class="section__subtitle">Visit our Tema showroom for a closer look at our furniture collection</h2>
			<div class="columns">
			
			<div class="column is-8">
				<h2 class="section__header">Business Hours : MON-FRI : 9:00 - 17:00 , SAT 10:00 - 15:00  SUNDAY CLOSED</h2>
				
				<div class="card">
				  <div class="card-image">
				    <figure class="image">
				      <img src="/img/bluegallery-showroom-tema.jpg" alt="Image">
				    </figure>
				  </div>
				  <div class="card-content">
				    <div class="media">
				      <div class="media-content">
				        <p class="title is-4">Aflao Road, near pedestrian and train bridges</p>
				      </div>
				    </div>
				    <div class="content">
						<div class="block">
							<a class="button" href="tel:+233264672320">
								<span>
									<span class="icon is-small">
										<i class="fa fa-phone"></i>
									</span>
									Phone | 
									<span class="icon is-small">
										<i class="fa fa-whatsapp"></i>
									</span>
									Whatsapp: +233 264672320
								</span>
							</a>
							<a class="button" href="https://www.google.com.gh/maps/place/Blue+Gallery+Home+%26+Office+Furniture/@5.688309,-0.0131917,17z/data=!3m1!4b1!4m2!3m1!1s0xfdf80629b203513:0xc882e55521da4358">
								<span class="icon is-small">
							    	<i class="fa fa-map-o"></i>
							    </span>
								<span>Map</span>
							</a>
					    </div>
				    </div>
				  </div>
				</div>
			</div>
		
				
			</div>
				<h2 id="contact" class="block section__title bump">Other Places you can find us</h2>
				<div class="block">
					<a href="mailto:bluegalleryghana@gmail.com"><div class="socialmedia__circle"><i class="fa fa-envelope"></i></div></a>
					<a href="https://www.instagram.com/bluegallery_ghana/"><div class="socialmedia__circle"><i class="fa fa-instagram"></i></div></a>
					<a href="https://twitter.com/blue_gallery"><div class="socialmedia__circle"><i class="fa fa-twitter"></i></div></a>
					<a href="https://web.facebook.com/blue.gallery.ghana"><div class="socialmedia__circle"><i class="fa fa-facebook-square"></i></div></a>
				</div>		
			</div>
		</div>
	</div>
</div>
@stop