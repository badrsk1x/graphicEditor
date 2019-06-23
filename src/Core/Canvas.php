<?php

namespace Src\Core;

use Src\Colors\Colors;

class Canvas
{
    private $editorWidth;
    private $editorHeight;
    private $editorBackground;

    /**
     * Canvas constructor.
     *
     * @param $shape
     */
    public function __construct($config)
    {
        $this->editorWidth = $config['editorWidth'] ;
        $this->editorHeight = $config['editorHeight'] ;
        $this->setEditorBackground($config['editorBackground']);
    }

    /**
     * @param string $background
     * @return mixed|void
     */
    public function setEditorBackground(string $color)
    {
        $this->editorBackground = Colors::convertToRGB($color);
    }


    /**
     * @return resource
     */
    public function drawCanvas()
    {
        header("Content-type: image/png");
        $bg = $this->editorBackground;
        $canvas = imagecreatetruecolor($this->editorWidth, $this->editorHeight);
        $bg = imagecolorallocate($canvas, $bg['r'], $bg['g'], $bg['b']);
        imagefill($canvas, 0, 0, $bg);

        return $canvas;
    }
}
