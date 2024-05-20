<?php
    class Circle {
        private $radio;

        public function __construct($radio) {
            $this->radio = $radio;
        }

        public function calcularArea() {
            return pi() * pow($this->radio, 2);
        }

        public function calcularPerimetro() {
            return 2 * pi() * $this->radio;
        }
    }

    echo "Introduce el radio del círculo: ";
    $radio = (float)readline();

    $circulo = new Circle($radio);

    echo "El área del círculo es: " . $circulo->calcularArea() . "\n";
    echo "El perímetro del círculo es: " . $circulo->calcularPerimetro() . "\n";
?>