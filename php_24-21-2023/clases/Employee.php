<?php

    class Employee {
        private $name;
        private $salary;

        public function __construct($name, $salary){
            $this->name = $name;
            $this->salary = $salary;
        }

        public function impuestos(){
            if($this->salary > 3000){
                echo $this->name . " debe pagar impuestos";
                
            } else {
                echo $this->name ." no debe pagar impuestos";
            }
        }

        public function setName($newName){
            $this->name = $newName;
        }

    }

?>