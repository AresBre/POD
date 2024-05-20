<?php
class Vehiculo {
    private $placa;

    public function __construct($placa) {
        $this->placa = $placa;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function tieneRestriccion(DateTime $fecha) {
        $ultimoDigito = $this->getUltimoDigitoPlaca();
        $diaSemana = $fecha->format('N');
        
        $restriccionesPares = [6, 7, 8, 9, 0];
        $restriccionesImpares = [1, 2, 3, 4, 5];

        $esDiaPar = $fecha->format('j') % 2 == 0;

        if ($esDiaPar && in_array($ultimoDigito, $restriccionesPares)) {
            return true;
        } elseif (!$esDiaPar && in_array($ultimoDigito, $restriccionesImpares)) {
            return true;
        }
        return false;
    }

    private function getUltimoDigitoPlaca() {
        return (int)substr($this->placa, -1);
    }
}

$vehiculo = new Vehiculo("ABC1234");
$fecha = new DateTime("2024-05-19");

if ($vehiculo->tieneRestriccion($fecha)) {
    echo "El vehículo con placa " . $vehiculo->getPlaca() . " tiene restricción por pico y placa el día " . $fecha->format('Y-m-d') . ".\n";
} else {
    echo "El vehículo con placa " . $vehiculo->getPlaca() . " NO tiene restricción por pico y placa el día " . $fecha->format('Y-m-d') . ".\n";
}
?>
