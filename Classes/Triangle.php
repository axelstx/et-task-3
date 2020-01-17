<?php

namespace Classes;

class Triangle extends Figure
{
    private $sideA;
    private $sideB;
    private $sideC;

    /**
     * Triangle constructor.
     * @param $sideA
     * @param $sideB
     * @param $sideC
     */
    public function __construct($sideA, $sideB, $sideC)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    /**
     * @return mixed
     */
    public function getSideA()
    {
        return $this->sideA;
    }

    /**
     * @param mixed $sideA
     */
    public function setSideA($sideA)
    {
        $this->sideA = $sideA;
    }

    /**
     * @return mixed
     */
    public function getSideB()
    {
        return $this->sideB;
    }

    /**
     * @param mixed $sideB
     */
    public function setSideB($sideB)
    {
        $this->sideB = $sideB;
    }

    /**
     * @return mixed
     */
    public function getSideC()
    {
        return $this->sideC;
    }

    /**
     * @param mixed $sideC
     */
    public function setSideC($sideC)
    {
        $this->sideC = $sideC;
    }

    public function __toString()
    {
        return "Object of class " . __CLASS__ . " with S = {$this->getArea()}";
    }

    public function getArea()
    {
        $a = $this->sideA;
        $b = $this->sideB;
        $c = $this->sideC;

        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            $halfPerimeter = ($a + $b + $c) / 2;
            return sqrt($halfPerimeter * ($halfPerimeter - $a) * ($halfPerimeter - $b) * ($halfPerimeter - $c));
        }

        return "Triangle can't exists with entered values!";
    }

    public static function getRandomObject()
    {
        $rand1 = mt_rand(1, 15);
        $rand2 = mt_rand(1, 15);
        $rand3 = ($rand1 + $rand2) - 1;

        return new Triangle($rand1, $rand2, $rand3);
    }

    public function getData()
    {
        return [
            'class' => 'Triangle',
            'sideA' => $this->sideA,
            'sideB' => $this->sideB,
            'sideC' => $this->sideC
        ];
    }
}
