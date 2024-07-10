<?php

class CalculadoraArea {
    public function areaQuadrado($lado) {
        return $lado * $lado;
    }

    public function areaRetangulo($largura, $altura) {
        return $largura * $altura;
    }

    public function areaCirculo($raio) {
        return pi() * $raio * $raio;
    }
}

$calculadora = new CalculadoraArea();

$ladoDoQuadrado = 20;
$larguraDoRetangulo = 30;
$alturaDoRetangulo = 50;
$medidaDoRaio = 10;

$areaQuadrado = $calculadora->areaQuadrado($ladoDoQuadrado);
$areaRetangulo = $calculadora->areaRetangulo($larguraDoRetangulo, $alturaDoRetangulo);
$areaCirculo = $calculadora->areaCirculo($medidaDoRaio);

echo "A área do quadrado é: (Os lados 20 x $ladoDoQuadrado) = $areaQuadrado";
print_r('<br>');
echo "A área do retângulo é: (A largura $larguraDoRetangulo x altura $alturaDoRetangulo) = $areaRetangulo";
print_r('<br>');
echo "A área do círculo é: (A medida do raio com valor $medidaDoRaio) = $areaCirculo";
print_r('<br>');

?>