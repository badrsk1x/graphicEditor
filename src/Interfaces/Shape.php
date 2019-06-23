<?php

namespace  Src\Interfaces;

/**
 * Interface Shape
 */
interface Shape
{

    /**
     * @param string $color
     * @return mixed
     */
    public function setBorderColor(string $color);

    /**
     * @return mixed
     */
    public function getBorderColor();

    /**
     * @param $width
     * @return mixed
     */
    public function setBorderWidth(int $width);

    /**
     * @return mixed
     */
    public function getBorderWidth();
}
