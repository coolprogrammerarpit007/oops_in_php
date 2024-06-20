<?php 

        // Pratice Problem 1

        class Rectangle{
            public $length;
            public $width;

            public function __construct($length,$width)
            {
                $this->length = $length;
                $this->width = $width;
            }

            public function calculate_area(){
                $total_area = $this->length * $this->width;
                return "Area of new rectangle will be: {$total_area} " . "<br>";
            }

            public function calculate_perimeter(){
                $total_perimeter = 2 * ($this->length + $this->width);
                return "Total Perimeter of rectangle will be: {$total_perimeter}" . "<br>";
            }
        }

        $rectangle1 = new Rectangle(25,14);
        echo $rectangle1->calculate_area();
        echo $rectangle1->calculate_perimeter();







?>