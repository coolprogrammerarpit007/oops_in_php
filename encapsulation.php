<?php



        // Encapsulation in php

        class Car{
            private $modal;
            private $color;
            private $fuel_level;


            public function __construct($modal,$color)
            {
                $this->modal = $modal;
                $this->color = $color;
                $this->fuel_level = 100;
            }

            public function get_modal(){
                return $this->modal;
            }

            public function get_color(){
                return $this->color;
            }

            public function get_fuel(){
                return $this->fuel_level;
            }


            public function drive(){
                $this->fuel_level -= 10;
                if($this->fuel_level < 0){
                    $this->fuel_level = 0;
                }
            }
        }

    $car1 = new Car("Hyundai","Silver");

    // print_r($car1);

    echo "The Car Brand Name is: {$car1->get_modal()}". "<br>";
    echo "The Car Color  is: {$car1->get_color()}". "<br>";
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
    $car1->drive();
    echo "The Car current fuel level  is: {$car1->get_fuel()} Km/hrs. ". "<br>";
?>