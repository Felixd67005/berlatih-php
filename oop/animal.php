<?php
    // create class Animal
    class Animal 
    {
        private $_name = "";
        private $_legs = 2;
        private $_cold_blooded  = false;

        public function __construct($name) 
        {
          $this->_name= $name;
        }

        public function get_name(){
            return $this->_name;
        }

        public function get_legs(){
            return $this->_legs;
        }

        public function get_cold_blooded(){
            if ($this->_cold_blooded) return "true";
            else return "false";
        }
    }
?>