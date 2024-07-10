<?php

class GeradorNumeroAleatorio {
    public function gerar($min, $max) {
        if ($min > $max) {
            throw new Exception("O valor mínimo deve ser menor ou igual ao valor máximo");
        }
        return rand($min, $max);
    }
}

$gerador = new GeradorNumeroAleatorio();

$intervalos = [
    [1, 10],
    [100, 1000],
    [1000, 10000],
    [50, 500],
    [100, 50]
];

echo "obs: Atualizar pagina para testar se os numeros vao aparecer aleatoriamente entre os intervalos citados ";
print_r('<br>');
print_r('<br>');

foreach ($intervalos as $intervalo) {
    $min = $intervalo[0];
    $max = $intervalo[1];
    $resultado = null;
    $erro = null;

try {
        $resultado = $gerador->gerar($min, $max);
    } 

catch (Exception $e) {
        $erro = $e->getMessage();
    } 

finally {
        if ($erro) {
            echo "Erro ao criar um número aleatório para intervalo [$min, $max]: $erro";
            print_r('<br>');
        } else {
            echo "Número aleatório criado para o intervalo [$min, $max]: $resultado";
            print_r('<br>');
        }
    }
}

?>


