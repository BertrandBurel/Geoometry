<?php
namespace Geoometry;

require_once 'Rectangle.php';

class Square extends Rectangle
{

    /**
     * Square constructor.
     */
    public function __construct(int $width)
    {
        parent::__construct($width, $width);
    }

}