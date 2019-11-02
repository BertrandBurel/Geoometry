<?php
namespace Geoometry;

class Square extends Rectangle
{

    /**
     * Square constructor.
     */
    public function __construct(int $width)
    {
        parent::__construct($width, $width, 'green');
    }

}