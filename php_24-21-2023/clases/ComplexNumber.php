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

        public function getComplexNumber(){
            if ($this->imaginario < 0){
                echo $this->real . $this->imaginario . "i";

            } else {
                echo $this->real . "+" . $this->imaginario . "i";
            }
        }

        public function sumComplexNumber($number){
            $real = $this->real + $number->getReal();
            $imaginario = $this->imaginario + $number->getImaginario();

            return [$real, $imaginario];
        }
    }

    $number1 = new ComplexNumber(2, -3);
    $number2 = new ComplexNumber(2, -3);

    $result = $number2->sumComplexNumber($number1);
    $number3 = new ComplexNumber($result[0], $result[1]);
    $number3->getComplexNumber();

?>