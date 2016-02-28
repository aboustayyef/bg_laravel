<?php 

namespace App;

/**
*	A Class that builds sets of thumbnails using files in folder 
*
* 	@param string $folder , the path to the thumbs directory, starting the app's public folder
* 	@param string $aspect , aspect ratio of thumbs. 'square', 'horizontal' or 'vertical' only 
* 	
* 	@example New ThumbSet('square', '/img/furnitureThumbs/ditre_beds/')->render()
*/

class ThumbSet

{
	private $aspect, $files, $folder;
	function __construct($folder, $aspect = "square")
	{
		// check if Aspect ratio is one of square, vertical or horizontal
		$this->aspect = $aspect;
		if (!in_array($aspect, ['square' , 'vertical' , 'horizontal'])) {
			throw new \Exception('Aspect should be one of : square, vertical or horizontal');
		}

		
		$this->folder = $folder;

		// check if folder exists
		$folder = public_path(). $folder;
		if (!chdir($folder)) {
			throw new \Exception('Folder doesnt exist');
		}

		// check if folder contains images
		$this->files = glob("*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);
		if (count($this->files) == 0) {
			throw new \Exception ('Folder contains no images');
		}
	}

	function render(){
		
		$aspect_attributes = [
			'square'		=> 		'col-xs-4 col-sm-3 col-md-2',
			'horizontal'	=>		'col-xs-6 col-md-4 col-lg-3',
			'vertical'		=>  	'col-xs-6 col-sm-3 col-md-2',
		];

		$attribute = $aspect_attributes[$this->aspect];
		$html = '<div class="row">' . PHP_EOL;
		
		foreach ($this->files as $key => $filename) {
			$html .= '<div class="' . $attribute . '">' . PHP_EOL;
			$html .= '<a href="#" class="thumbnail">' . PHP_EOL;
			$html .= '<img src="' . asset($this->folder) . '/' . $filename . '" alt="...">' . PHP_EOL;
			$html .= '</a>' . PHP_EOL;
			$html .= '<h4>' . $this->nameFromFilename($filename) . '</h4>' . PHP_EOL;
			$html .= '</div>' . PHP_EOL ;
		}

		$html .= '</div>' . PHP_EOL ; // row
		return $html;
	}

	/*
	Convert a filename like hello_sofa.jpg to a name like "Hello Sofa"
	 */
	function nameFromFilename($filename){
		// remove extension
		$filename = explode('.', $filename)[0];
		
		// convert _ to space
		$filename = str_replace('_', ' ', $filename);

		// convert to Capital
		return ucwords($filename);
	}

}

?>