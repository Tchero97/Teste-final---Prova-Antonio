<?php

class CalculadoraFatorial {
    public function calcular($numero) {
        if ($numero < 0) {
            throw new Exception("Número deve ser não-negativo");
        }
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
}

$calculadora = new CalculadoraFatorial();
$Meusnumeros = [20, -20];


echo "numeros de entrada são eles (20) e (-20)" ;
print_r('<br>');
print_r('<br>');

foreach ($Meusnumeros as $numero) {
        $resultado = null;
        $erro = null;
    
try {
        $resultado = $calculadora->calcular($numero);
} catch (Exception $e) {

        $erro = $e->getMessage();

} finally {

        if ($erro) {
            echo "Erro ao calcular o fatorial de $numero: $erro";
           
        } else {
            echo "O Fatorial do $numero é: $resultado";
            print_r('<br>');
    }
  }
}

?>

