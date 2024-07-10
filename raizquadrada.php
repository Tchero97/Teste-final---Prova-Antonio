<?php

class CalculadoraRaizQuadrada {
    public function calcular($numero) {
        if ($numero < 0) {
            throw new Exception("Número deve ser não-negativo");
        }
        return sqrt($numero);
    }
}

$MinhaCalculadora = new CalculadoraRaizQuadrada();

$numeros = [9, 16, 81, 14, 9, -49];

foreach ($numeros as $numero) {
try {
        $resultado = $MinhaCalculadora->calcular($numero);
        echo "A raiz quadrada de $numero é $resultado";
        print_r('<br>');
    } 
catch (Exception $e) {
        echo "Impossivel calcular raiz quadrada do numero $numero: " . $e->getMessage();
        print_r('<br>');
    }
}

?>
