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

    Class TipoOperacion {
        const SUMA =1;
        const RESTA =2;
        const MULTIPLICACION =3;
        const DIVISION = 4;
    }

    Class Operacion extends Calculadora{
        public function operar($tipoOperacion){
            switch ($tipoOperacion) {
                //realizar operaciones
                case TipoOperacion::SUMA:
                    $this->resultado = $this->n1 + $this->n2;
                    $this->resultado();
                    break;
                case TipoOperacion::RESTA:
                    $this->resultado = $this->n1 - $this->n2;
                    $this->resultado();
                    break;
                case TipoOperacion::MULTIPLICACION:
                    $this->resultado = $this->n1 * $this->n2;
                    $this->resultado();
                    break;
                case TipoOperacion::DIVISION:
                    $this->resultado = $this->n1 / $this->n2;
                    $this->resultado();
                    break;
                default:
                    echo "Operacion no valida";
                    break;
            }
        }

    }

    $suma = new Operacion(1,2);
    $suma->operar(TipoOperacion::SUMA);

    
    $resta = new Operacion(3,1);
    $resta->operar(TipoOperacion::RESTA);

    $multiplicacion = new Operacion(4,4);
    $multiplicacion->operar(TipoOperacion::MULTIPLICACION);

    $division = new Operacion(100, 10);
    $division->operar(TipoOperacion::DIVISION);