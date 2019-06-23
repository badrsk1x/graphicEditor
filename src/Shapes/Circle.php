<?php

namespace Src\Shapes;

class Circle extends AbstractShape
{
    private $area;

    /**
     * Circle constructor.
     *
     * @param $shape
     */
    public function __construct($shape)
    {
        $this->validate($shape);
        $this->setArea($shape['perimeter']);
        $this->setBorderColor($shape['border']['color']);
        $this->setBorderWidth($shape['border']['width']);
    }

    /**
    * check if the circle has the required attributes
    *
    * @param array $attributes
    * @return bool
    */
    public function validate(array $attributes)
    {
        if (! isset($attributes['perimeter'])) {
            throw new \LogicException("Please define 'perimeter' of the circle");
        }
        return true;
    }


    /**
     * @param $perimeter
     *
     * @return intger
     */
    public function setArea($perimeter)
    {
        $nq = ($perimeter / 2);

        $this->area = floor((22 / 7) * ($nq * $nq));
    }

    /**
     * @return int
     */
    public function getArea(): int
    {
        return $this->area;
    }

    /**
     * @param $canvas
     * @return mixed
     */
    public function draw($canvas)
    {
        $x = $this->getArea();
        $color = $this->getBorderColor();
        $thickness = $this->getBorderWidth();
        
        $color = imagecolorallocate($canvas, $color['r'], $color['g'], $color['b']);
       
        imagesetthickness($canvas, $thickness);
        imageellipse($canvas, 200, 200, $x, $x, $color);

        return $canvas;
    }
}
