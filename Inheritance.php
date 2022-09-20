<?php 
    class Fruits{
        public $name,$color;
        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        function answer(){
            echo "The fruit is {$this->name} and the color is {$this->color}";
        }
    }
    class Fruits_ex extends Fruits{
        function question(){
            echo "What fruit is it?";
        }
    }
    $fruits = new Fruits_ex("mango","yellow");
    echo $fruits->question();
    echo "<br>";
    echo $fruits->answer();
?>