<?php 
    class Information_const{
        public $name;
        public $id;
        function __construct($name,$id){
            $this->name = $name;
            $this->id = $id;
        }
        function get_info(){
            return "$this->name <br> $this->id";
        }
    }
    $info = new Information_const("Steve",10);
    echo $info->get_info();

    class Information_dest{
        public $name;
        public $id;
        function __construct($name,$id){
            $this->name = $name;
            $this->id = $id;
        }
        function __destruct()
        {
            echo "{$this->name} <br> {$this->id}";
        }
    }
    echo "<br>";
    $info_d = new Information_dest("Ron",11);
    
?>