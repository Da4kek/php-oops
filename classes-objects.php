<?php
    class Information_basic{
        public $name;
        public $id;
        function post_input($name,$id){
            $this->name = $name;
            $this->id = $id;
        }
        function get_output(){
            return "$this->name <br> $this->id";
        }
    }
    $info = new Information_basic();
    $info->post_input("Sample Name",1);
    echo $info->get_output();
?>