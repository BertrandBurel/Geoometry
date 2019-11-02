<?php
namespace Geoometry;

class Circle extends Shape
{
    /***
     * @var integer
     */
    private $radius;

    /***
     * @var integer
     */
    private $diameter;

    const PI = 3.14159;

    /**
     * Circle constructor.
     */
    public function __construct(int $radius, string $color)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function getRadius() : int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     * @return Circle
     */
    public function setRadius($radius) : Circle
    {
        try {
            if($this->radius < 0) {
                throw new Exception('Radius must be positive value.');
            } else {
                $this->radius = $radius;
                return $this;
            }
        } catch(RuntimeException $e) {
            echo "An exception has occured : " . $e->getMessage();
        }$this->radius = $radius;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiameter() : int
    {
        return $this->diameter;
    }

    /**
     * @param int $radius
     * @return Circle
     */
    public function setDiameter($diameter) : Circle
    {
        try {
            if($this->diameter < 0) {
                throw new Exception('Diameter must be positive value.');
            } else {
                $this->diameter = $diameter;
                return $this;
            }
        } catch(RuntimeException $e) {
            echo "An exception has occured : " . $e->getMessage();
        }
    }

    public function __toString()
    {
        return '<div style="width:' .  2 * $this->radius . 'px;
                            height:' . 2 * $this->radius . 'px;
                            border-radius: 50%;
                            background:' . $this->color . ';"></div>';
    }

    public function getPerimeter(): float
    {
        try {
            if($this->radius < 0) {
                throw new Exception('Radius must be positive value.');
            } else {
                return ($this->radius * SELF::PI);
            }
        } catch(RuntimeException $e) {
            echo "An exception has occured : " . $e->getMessage();
        }

    }

    public function getArea(): float
    {
        try {
            if($this->radius < 0) {
                throw new Exception('Radius must be positive value.');
            } else {
                return (($this->radius) ** 2) * SELF::PI;
            }
        } catch(RuntimeException $e) {
            echo "An exception has occured : " . $e->getMessage();
        }
    }
}