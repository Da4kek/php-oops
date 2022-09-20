<?php 
    //parent class
    abstract class Cars{
        public $name;
        function __construct($name){
            $this->name = $name;
        }
        abstract public function display() : string;
    }
    //child class
    class Condition extends Cars{
        public function display() : string{
            return "The condition is: $this->name!";
        }
    }
    class Name extends Cars{
        public function display() : string{
            return "The name of the car: $this->name";
        }
    }
    $name = new Name("Audi");
    echo $name->display();
    echo "<br>";
    $condition = new Condition("good");
    echo $condition->display();
?>