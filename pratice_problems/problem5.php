<?php

    // Problem 5 on PHP

    class Vechile{

        private $brand;
        private $modal;
        private $year;


        public function __construct($brand,$modal,$year)
        {
            $this->brand = $brand;
            $this->modal = $modal;
            $this->year = $year;
        }

        public function get_brand(){
            echo "The brand name is: {$this->brand}" . "<br>";
        }
        public function get_modal(){
            echo "The brand name is: {$this->modal}" . "<br>";
        }
        public function get_year(){
            echo "The brand name is: {$this->year}" . "<br>";
        }
    }

    $car = new Vechile('Tata','Tata Nixon',1998);
    $car->get_brand();
    $car->get_modal();
    $car->get_year();

?>