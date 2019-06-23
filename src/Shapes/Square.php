<?php

namespace Src\Shapes;

class Square extends AbstractShape
{
    private $sideLength;

    public function __construct($shape)
    {
        $this->validate($shape);
        $this->setSideLength($shape['sideLength']);
        $this->setBorderColor($shape['border']['color']);
        $this->setBorderWidth($shape['border']['width']);
    }

    /**
     * check if the square has the required attributes
     *
     * @param array $attributes
     * @return bool
     */
    public function validate(array $attributes)
    {
        if (! isset($attributes['sideLength'])) {
            throw new \LogicException("Please define 'sideLength' of the square");
        }
        return true;
    }


    /**
     * @param string $color
     */
    public function setSideLength(string $sideLength)
    {
        $this->sideLength = $sideLength;
    }

    /**
     * @return mixed
     */
    public function getSideLength()
    {
        return $this->sideLength;
    }

    /**
     * @param $canvas
     */
    public function draw($canvas)
    {
        $length = $this->getSideLength();
        $color = $this->getBorderColor();
        $thickness = $this->getBorderWidth();
        $color = imagecolorallocate($canvas, $color['r'], $color['g'], $color['b']);

        imagesetthickness($canvas, $thickness);
        imagerectangle($canvas, 100, 100, $length, $length, $color);
    }
}
