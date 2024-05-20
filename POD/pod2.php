<?php
    class Rectangle {
        private $longitud;
        private $anchura;

        public function __construct($longitud, $anchura) {
            $this->longitud = $longitud;
            $this->anchura = $anchura;
        }

        public function calcularArea() {
            return $this->longitud * $this->anchura;
        }
    }

    echo "Introduce la longitud del rectangulo: ";
    $longitud = readline();

    echo "Introduce la anchura del rectangulo: ";
    $anchura = readline();

    $rectangulo = new Rectangle($longitud, $anchura);

    echo "El área del rectángulo es: " . $rectangulo->calcularArea() . "\n";
?>