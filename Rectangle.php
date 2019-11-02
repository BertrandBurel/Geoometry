<?php
namespace Geoometry;

class Rectangle extends Shape
{
    /**
     * @var integer
     */
    protected $width;
    /**
     * @var integer
     */
    private $height;

    /**
     * Rectangle constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height, string $color)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Rectangle
     */
    public function setWidth($width) : Rectangle
    {
        try {
            if($this->width < 0) {
                throw new Exception('Width must be positive value.');
            } else {
                $this->width = $width;
                return $this;
            }
        } catch(RuntimeException $e) {
            echo "An exception has occured : " . $e->getMessage();
        }
    }

    /**
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Rectangle
     */
    public function setHeight($height) : Rectangle
    {
        try {
            if($this->height < 0) {
                throw new Exception('Height must be positive value.');
            } else {
                $this->height = $height;
                return $this;
            }
        } catch(RuntimeException $e) {
            echo "An exception has occured : " . $e->getMessage();
        }
    }

    public function __toString()
    {
        return '<div style="width:' . $this->width . 'px;
                            height:' . $this->height . 'px;
                            background:' . $this->color . ';"></div>';
    }

    public function getPerimeter(): float
    {
        return ($this->width + $this->height) * 2;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }

}