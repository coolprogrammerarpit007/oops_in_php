<?php 

// Abstraction:- Abstraction is a concept of hiding complex details of implementation.
// Abstraction is achieved through abstract functions

abstract class Shapes{
    abstract public function calculate_area();
}


// Class Circle
class Circle extends Shapes{

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculate_area()
    {
        return pi() * $this->radius * $this->radius;
    }

}

// Class Rectangle

class Rectangle{
    private $length;
    private $width;

    public function __construct($length,$width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculate_area(){
        return $this->length * $this->width;
    }

}
$circle1 = new Circle(5);
$rectangle = new Rectangle(15,10);
echo "Area of Circle: {$circle1->calculate_area()} " . "<br>";
echo "Area of Rectangle: {$rectangle->calculate_area()} "."<br>";
?>