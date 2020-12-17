<?php

namespace App;

/**
 *   A Class that builds sets of thumbnails using files in folder.
 *
 *   @param string $folder , the path to the thumbs directory, starting the app's public folder
 *   @param string $aspect , aspect ratio of thumbs. 'square', 'horizontal' or 'vertical' only
 *
 *   @example New ThumbSet('square', '/img/furnitureThumbs/ditre_beds/')->render()
 */
class ThumbSet
{
    public $list = [];
    private $files;
    private $folder;

    public function __construct($folder)
    {
        $this->folder = $folder;

        // check if folder exists
        $folder = public_path().$folder;
        if (!chdir($folder)) {
            throw new \Exception('Folder doesnt exist');
        }

        // check if folder contains images
        $this->files = glob('*.{jpg,JPG,jpeg,JPEG,png,PNG}', GLOB_BRACE);
        if (count($this->files) == 0) {
            throw new \Exception('Folder contains no images');
        }

        foreach ($this->files as $key => $filename) {
            $this->list[] =
            [
                'title' => $this->nameFromFilename($filename),
                'location' => asset($this->folder).'/'.$filename,
            ];
        }
    }

    /*
    Convert a filename like hello_sofa.jpg to a name like "Hello Sofa"
     */
    public function nameFromFilename($filename)
    {
        // if filename starts with sorting numbers, truncate first three characters
        if (preg_match("#^\d\d_#", $filename)) {
            $filename = substr($filename, 3); // example: 03_filename.jpg becomes filename.jpg
        }

        // remove extension
        $filename = explode('.', $filename)[0];

        // convert _ to space
        $filename = str_replace('_', ' ', $filename);

        // convert to Capital
        return ucwords($filename);
    }
}
