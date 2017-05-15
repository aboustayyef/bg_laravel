<section class="section bg__section">
	<div class="container">
			<h2 class="section__title">Our Customers</h2>
			<h3 class="section__subtitle">Some of Ghana’s most admired companies trust our products</h3>
	
		<div class="customers__logo_collection">

	{{-- Automatically populate with logos in folder (customer logos) --}}

	<?php 
		// check if folder exists and change directory to it
        $folder = public_path(). '/img/customerslogos/';
		if (!chdir($folder)) {
            throw new \Exception('Folder doesnt exist');
        }
        // check if folder contains images
        $files = glob("*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);
        if (count($files) == 0) {
            throw new \Exception ('Folder contains no images');
        }
        foreach ($files as $key => $filename) {
?>
		<img src ="/img/customerslogos/{{$filename}}" class="customers__logo">
<?php 
		}
?>
		</div>
	</div>
</section>
