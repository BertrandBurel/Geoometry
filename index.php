<?php
    function autoloadClass($class)
    {
        $class = str_replace('Geoometry\\', "", $class);
        $class = str_replace("\\", "/", $class);

        require $class . '.php';
    }

    spl_autoload_register('autoloadClass');

    use Geoometry\Shape;
    use Geoometry\Rectangle;
    use Geoometry\Square;
    use Geoometry\Circle;

    $rectangle = new Rectangle(200, 150);

    $rectangle->setHeight(150);
    $rectangle->setWidth(200);
    //$rectangle->setColor('blue');

    var_dump($rectangle);

    echo $rectangle . "<br>";
    echo "Perimeter of rectangle is " . $rectangle->getPerimeter() . " px<br>";
    echo "Area of rectangle is " . $rectangle->getArea() . " px<sup>2</sup>";
    echo '<br><br>';

    $square = new Square(200);

    var_dump($square);

    $circle = new Circle(200,'red');

    $circle->setRadius(150);
    $circle->setColor('orange');

    var_dump($circle);

    echo $circle;
    echo '<br><br>';

    echo "Perimeter of circle is " . $circle->getPerimeter() . " px<br>";
    echo "Area of circle is " . $circle->getArea() . " px<sup>2</sup>";
