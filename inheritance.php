<?php

// Inheritance in PHP

class Animal{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eating()
    {
        return "{$this->name} is eating food.";
    }
}

class Dog extends Animal{
    public function bark()
    {
        return "{$this->name} the Dog is barking.";
    }
}

class Cat extends Animal{
    public function meow()
    {
        
        return "{$this->name} the kitten is meowing!";
    }
}

$dog1= new Dog("Johnny");
$cat1= new Cat("Romida");
echo $dog1->bark() . "<br>";
echo $cat1->meow() . "<br>";
echo $cat1->eating() . "<br>";

?>