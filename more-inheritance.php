<?php 
    class Data{
        public $info;
        public $id;
        public function __construct($info,$id){
            $this->info = $info;
            $this->id = $id;
        }
        protected function display(){
            echo "This is a protected function!";
        }
    }
    class Data_ext extends Data{
        public function information(){
            echo "This is the id: {$this->id}";
            echo "<br>";
            echo "This is the information: {$this->info} <br>";
            $this->display();
        }
        
    }
    $data = new Data_ext("This is the info",10);
    echo $data->information();
?>