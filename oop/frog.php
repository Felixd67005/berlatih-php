<?php
    // release 1
    require_once ('animal.php');
    class Frog extends Animal {
        public function __construct($name) 
        {
          $this->_legs = 4;
        }

        public function jump() {
            return 'hop hop';
        }
    }   
?>