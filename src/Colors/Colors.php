<?php
namespace Src\Colors;

class Colors
{

    /**
     * @param $color
     *
     * @return mixed
     */
    public static function convertToRGB($color)
    {
        $hex = str_replace('#', '', $color);
        $rgbArray['r'] = hexdec(substr($hex, 0, 2));
        $rgbArray['g'] = hexdec(substr($hex, 2, 2));
        $rgbArray['b'] = hexdec(substr($hex, 4, 2));

        return $rgbArray;
    }
}
