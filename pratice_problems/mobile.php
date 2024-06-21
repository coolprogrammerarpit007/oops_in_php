<?php

    $mobileSim = $_POST["sim"];
    // echo $mobileSim."<br>";
    // Mobile Class

    abstract class SIM{

        abstract public function calling();
        abstract public function message();

    }

    class BSNL extends SIM{
        private $company;
        private $year;

        public function __construct($company,$year)
        {
         $this->company = $company;
         $this->year = $year;   
        }

        public function calling(){
            return "Calling with the {$this->company} sim.";
        }


        public function message(){
            return "Messaging with the {$this->company} sim.";
        }
        
    };
    class AIRTEL extends SIM{
        private $company;
        private $year;

        public function __construct($company,$year)
        {
         $this->company = $company;
         $this->year = $year;   
        }

        public function calling(){
            return "Calling with the {$this->company} sim." ;
        }


        public function message(){
            return "Messaging with the {$this->company} sim.";
        }
        
    };


    $mobileUser1 = new BSNL($mobileSim,1997);
    // $mobileUser2 = new AIRTEL("Airtel",2003);


    echo $mobileUser1->calling();
    // echo $mobileUser1->message();
    // echo $mobileUser2->calling();
    // echo $mobileUser2->message();

    

