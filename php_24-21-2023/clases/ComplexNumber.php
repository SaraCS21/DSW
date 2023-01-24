<?php

    class ComplexNumber {
        private $real;
        private $imaginario;

        public function __construct($real, $imaginario){
            $this->real = $real;
            $this->imaginario = $imaginario;
        }

        public function getComplexNumber(){
            if ($this->imaginario < 0){
                echo $this->real . $this->imaginario . "i";

            } else {
                echo $this->real . "+" . $this->imaginario . "i";
            }
        }
    }

    $number1 = new ComplexNumber(2, -3);
    $number1->getComplexNumber();

?>