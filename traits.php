<?php 
    trait message1{
        public function message(){
            echo "this is a message";
        }
    }
    trait message2{
        public function message2(){
            echo "this is another message";
        }
    }
    class Message{
        use message1;
    }
    class Message3{
        use message1,message2;
    }
    $msg1 = new Message();
    $msg1->message();
    echo "<br>";
    $msg2 = new Message3();
    $msg2->message();
    echo "<br>";
    $msg2->message2();
    
?>