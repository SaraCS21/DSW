<?php

    class ComplexNumber {
        private $real;
        private $imaginario;

        public function __construct($real, $imaginario){
            $this->real = $real;
            $this->imaginario = $imaginario;
        }

        public function getReal(){
            return $this->real;
        }

        public function getImaginario(){
            return $this->imaginario;
        }

        public function __toString() :string {
            if ($this->imaginario < 0){
                return $this->real . $this->imaginario . "i";

            } else {
                return $this->real . "+" . $this->imaginario . "i";
            }
        }

        public function sum($number){
            $real = $this->real + $number->getReal();
            $imaginario = $this->imaginario + $number->getImaginario();

            return [$real, $imaginario];
        }
    }
?>