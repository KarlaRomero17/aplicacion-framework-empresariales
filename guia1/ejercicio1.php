<?php
    class Calculadora{
        protected $n1;
        protected $n2;
        protected $resultado;

        public function __construct($n1, $n2) {
            $this->n1 = $n1;
            $this->n2 = $n2;
        }
        public function resultado() {
            echo 'El resultado es: ' . $this->resultado . '<br>';
        }
    }

    //Suma
    class Suma extends Calculadora {
        public function operacion(){
            $this->resultado = $this->n1 + $this->n2;
            $this->resultado();
        }
    }
    //Resta
    class Resta extends Calculadora {
        public function operacion(){
            $this->resultado = $this->n1 - $this->n2;
            $this->resultado();
        }
    }
    //Multiplicacion
    class Multiplicacion extends Calculadora {
        public function operacion(){
            $this->resultado = $this->n1 * $this->n2;
            $this->resultado();
        }
    }
    //Division
    class Division extends Calculadora {
        public function operacion(){
            $this->resultado = $this->n1 / $this->n2;
            $this->resultado();
        }
    }

    //
    $suma = new Suma(2, 1);
    $suma->operacion();

    $resta = new Resta(3, 1);
    $resta->operacion();

    $multiplicacion = new Multiplicacion(4,4);
    $multiplicacion->operacion();

    $division = new Division(100, 10);
    $division->operacion();