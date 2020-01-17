<?php

namespace Classes;

class Circle extends Figure
{
    private $radius;

    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function __toString()
    {
        return "Object of class " . __CLASS__ . " with S = {$this->getArea()}";
    }

    public function getArea()
    {
        return M_PI * pow($this->radius, 2);
    }

    public static function getRandomObject()
    {
        return new Circle(mt_rand(1, 15));
    }

    public function getData()
    {
        return [
            'class' => 'Circle',
            'radius' => $this->radius
        ];
    }
}
