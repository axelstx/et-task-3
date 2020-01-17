<?php

namespace Classes;

class Rectangle extends Figure
{
    private $height;
    private $width;

    /**
     * Rectangle constructor.
     * @param $height
     * @param $width
     */
    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function __toString()
    {
        return "Object of class " . __CLASS__ . " with S = {$this->getArea()}";
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }

    public static function getRandomObject()
    {
        return new Rectangle(mt_rand(1, 15), mt_rand(1, 15));
    }

    public function getData()
    {
        return [
            'class' => 'Rectangle',
            'height' => $this->height,
            'width' => $this->width
        ];
    }
}
