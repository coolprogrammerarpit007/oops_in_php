<?php

    // Problem 3 in php

    abstract class Shape{

        abstract public function calculate_area();
    }

    class Triangle extends Shape{
        private $base;
        private $height;


        public function __construct($base,$height)
        {
            $this->base = $base;
            $this->height = $height;
        }

        public function calculate_area()
        {
            $area_of_triangle = 0.5 * $this->height * $this->base;
            return "Area of triangle will be: {$area_of_triangle}" . "<br>";
        }
    }

    class Rectangle extends Shape{
        private $length;
        private $height;

        public function __construct($length,$height)
        {
            $this->length = $length;
            $this->height = $height;
        }

        public function calculate_area()
        {
            $area_of_rectangle = $this->length * $this->height; 
            return "Area of rectangle will be: {$area_of_rectangle}" . "<br>";
        }
    }

    $new_triangle = new Triangle(12,12);
    $new_rectangle = new Rectangle(25,25);

    echo $new_triangle->calculate_area();
    echo $new_rectangle->calculate_area();



?>