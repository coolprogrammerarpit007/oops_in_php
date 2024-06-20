<?php 

        // Pratice Problem 2 in php

        class Circle{
            private $radius;

            public function __construct($radius){
                $this->radius = $radius;
            }

            public function calculate_circle_area(){
                $circle_area = pi() * pow($this->radius,2);
                return "Total Area of circle will be: {$circle_area}" . "<br>";
            }
            
            public function calculate_circle_circumfrance(){
                $circle_perimeter = 2 * pi() * $this->radius;
                return "Total Circumfrance  of circle will be: {$circle_perimeter}" . "<br>";
            }
        }

        $new_circle = new Circle(5);

        echo $new_circle->calculate_circle_area();
        echo $new_circle->calculate_circle_circumfrance();

?>