<?php

class VerificadorNumeroPrimo {
    public function ehPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

$MeuVerificador = new VerificadorNumeroPrimo();

$numeros = [0, 1, 2, 3, 5, 6, 7, 8, 10, 30, 57, 100];

foreach ($numeros as $numero) {
    if ($MeuVerificador->ehPrimo($numero)) {
        echo " $numero é numero primo.";
        print_r('<br>');
    } else {
        echo " $numero não é numero primo.";
        print_r('<br>');
    }
}

?>
