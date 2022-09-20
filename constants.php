<?php 
    class Constants{
        const Message = "This is how you can call the constant <br>";
        const Message1 = "This is another way you can call the constant";
        public function display(){
            echo self::Message;
        }
    }
    $constant = new Constants;
    $constant->display();
    echo Constants::Message1; //can directly print the constant without creating a method
?>