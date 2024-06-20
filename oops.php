<?php

        // Creating Class Dog in php

        class Dog{

            // Class Attributes
            public $name;
            public $breed;

            // Constructor Method
            public function __construct($name,$breed)
            {
                $this->name = $name;
                $this->breed = $breed;
            }

            // Class Methods

            public function bark(){
                echo "woof woof!!"."<br>";
            }

            public function fetch(){
                return "{$this->name} is fetching". "<br>";
            }
        }

        $dog1 = new Dog('Tommy','Pomerian');
        $dog1->bark();
        echo $dog1->fetch();

        
        $dog1->name = 'Tiger';
        echo "The dog's new name is: {$dog1->name}";


        // The for pillars of OOPS are Abstraction,Encapsulation,Inheritance and Polymorphism.



 ?>