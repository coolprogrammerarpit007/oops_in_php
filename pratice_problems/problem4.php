<?php

    //  Problem 4 in oops in php

    interface Resizeable{
        public function resize($percentage);
    }


    class Square implements Resizeable{
        private $size;

        public function __construct($size)
        {
            $this->size = $size;
        }

        public function resize($percentage){
            $new_size = ($this->size) * ($percentage)/100;
            return "New Size of the Square will be: {$new_size}" . "<br>";
        }

        public function get_size(){
            return $this->size . "<br>";
        }
    }


    $new_square = new Square(350);
    echo $new_square->resize(50);
    echo $new_square->get_size();

?>