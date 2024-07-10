<?php

class ConversorString {
    public function paraMaiusculas($string) {
        return strtoupper($string);
    }

    public function paraMinusculas($string) {
        return strtolower($string);
    }
}

$conversor = new ConversorString();

$StringConverterGrande = "Bom dia Meu joia";
$StringConverterPequeno = "SALVE LINDAO";

$stringGrande = $conversor->paraMaiusculas($StringConverterGrande);
$stringPequena = $conversor->paraMinusculas($StringConverterPequeno);


echo "O que coloquei na entrada de dados: $StringConverterGrande";
print_r('<br>');
echo "A saida dos Dados em maiusculas: $stringGrande";
print_r('<br>');

echo('<br>');

echo "O que coloquei na entrada de dados: $StringConverterPequeno";
print_r('<br>');
echo "A saida Dos Dados em Minúsculas: $stringPequena";


?>