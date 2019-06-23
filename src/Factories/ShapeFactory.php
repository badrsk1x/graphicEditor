<?php
namespace Src\Factories;

/**
 * Class ShapeFactory.
 */
class ShapeFactory
{
    public static function create($shape)
    {
        $resource = $shape['type'];
       
        $className = 'Src\\Shapes\\'.ucfirst($resource);
        if (class_exists($className)) {
            return new $className($shape['params']);
        }
        throw new \Exception("The {$resource} shape does not Exist");
    }
}
