<?php
    class Power {
        private $base;
        private $exponente;

        public function __construct($base, $exponente) {
            $this->base = $base;
            $this->exponente = $exponente;
        }

        public function calcularPotencia() {
            return pow($this->base, $this->exponente);
        }
    }

    echo "Introduce la base: ";
    $base = (float)readline();

    echo "Introduce el exponente: ";
    $exponente = (int)readline();

    $potencia = new Power($base, $exponente);

    echo "El resultado de " . $base . " elevado a " . $exponente . " es: " . $potencia->calcularPotencia() . "\n";
?>
