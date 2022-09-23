<?php 
    interface Animal{
        public function sound();
    }
    class Dog implements Animal{
        public function sound(){
            echo "bow!";
        }
    }
    class Cat implements Animal{
        public function sound(){
            echo "meow!";
        }
    }
    class Birds implements Animal{
        public function sound(){
            echo "chirp!";
        }
    }
    $dog = new Dog();
    $cat = new Cat();
    $bird = new Birds();
    $animals = array($dog,$cat,$bird);
    foreach($animals as $animal){
        $animal->sound();
        echo "<br>";
    }

?>