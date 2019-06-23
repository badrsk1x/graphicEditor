<?php

namespace Src\Core;

class Image
{
    protected $resource;
    protected $quality=0;
    /**
    * Load Image
    *
    * @access public
    */
    public function __construct($resource = null)
    {
        $this->resource = $resource ;
    }

    /**
    * Saves the image to specific path.
    *
    * @access public
    * @param string $filename
    * in load path for default.
    */
    public function save($filename = null)
    {
        $this->filename = 'files/'.uniqid().'.png';
        return $this->outputBuffer($this->filename);
    }

    /**
    * Output the image to a file.
    *
    * @access private
    * @param string $filename Path to save image
    */
    private function outputBuffer($filename = null, $output = false)
    {
        if (!$this->resource) {
            return $this;
        }
        $quality = $this->quality;
        imagepng($this->resource, $filename, $quality);
        return $this;
    }
}
