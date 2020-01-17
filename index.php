<?php

use Classes\Circle;
use Classes\Triangle;
use Classes\Rectangle;
use Classes\File;

spl_autoload_register();

//$c = Circle::getRandomObject();
//File::saveToFile('figures.json', $c->getData());
//$r = Rectangle::getRandomObject();
//File::saveToFile('figures.json', $r->getData());
//$t = Triangle::getRandomObject();
//File::saveToFile('figures.json', $t->getData());

$figures = File::getFromFile('figures.json');
$result = [];

foreach($figures as $value) {
    switch ($value['class']) {
        case 'Circle':
            $result[]['object'] = new Circle($value['radius']);
            break;
        case 'Rectangle':
            $result[]['object'] = new Rectangle($value['height'], $value['width']);
            break;
        case 'Triangle':
            $result[]['object'] = new Triangle($value['sideA'], $value['sideB'], $value['sideC']);
            break;
    }
}

for ($i = 0; $i < count($result); $i++) {
    $result[$i]['area'] = $result[$i]['object']->getArea();
}

usort($result, function ($a, $b) {
    if ($a['area'] === $b['area']) {
        return 0;
    }
    return $a['area'] > $b['area'] ? -1 : 1;
});

foreach ($result as $value) {
    echo $value['object']->__toString();
    echo "<br>";
}
