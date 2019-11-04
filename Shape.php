<?php
namespace Geoometry;

abstract class Shape
{
    /**
     * @var string
     */
    protected $color = 'lightblue';

    /**
     * Shape constructor.
     * @param string $color
     */

    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Rectangle
     */
    public function setColor($color) : Shape
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return float
     */
    abstract public function getPerimeter(): float;

    /**
     * @return float
     */
    abstract public function getArea(): float;
}