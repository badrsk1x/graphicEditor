<?php
require "bootstrap.php";

use Src\Core\Canvas;
use Src\Factories\ShapeFactory;
use Src\Core\Image;

$data = [
    [
        'type' => 'Circle',
        'params' => [
            "perimeter"=> 10,
            'border' => [
                'color' => '#999999',
                'width' => 10,
            ],
            'background' =>'#f4df42',
        ]
        ],
        [
            'type' => 'square',
            'params' => [
                "sideLength"=> 10,
                'border' => [
                    'color' => '#999cff',
                    'width' => 5,
                ]
            ]
        ]
];



$canvas=new Canvas($config);
$canvas=$canvas->drawCanvas();

   
foreach ($data as $shape) {
    $resource = ShapeFactory::create($shape);
    $resource->draw($canvas);
}

$image =new Image($canvas);
$res = $image->save();

var_dump($res);
