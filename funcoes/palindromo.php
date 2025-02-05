<div class="titulo">Palíndromo</div>

<?php
function ePalindromo($texto) {
    $inverso = (strrev($texto));
    if ($inverso == $texto) {
        return "$texto é um palíndromo.<br>";
    } else {
        return "$texto não é um palíndromo.<br>";
    }
}
echo ePalindromo('arara');

function palindromoComFor($text) {
    $i = 0;
    $tamanho = strlen($text);
    for ($i = 0; $i<$tamanho; $i++) {
        return  $text[$i] === $text[$tamanho -1 -$i] ? "$text é um palindromo.<br>" : "$text não é um palindromo.<br>";
    }
}
echo palindromoComFor('subi no onibus');
