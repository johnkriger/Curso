<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero) {
    $soma = 0;
    for(; $numero >= 1; $numero--) {
        $soma += $numero;
        echo "$soma <br>";
    }
    return $soma . '<br>';
}
echo somaUmAte(5) . '<br>';

function somaUmAte1($numero) {
    $soma = 0;
    for($i = 1; $i <= $numero; $i++) {
        $soma += $i;
        echo "$soma <br>";
    }
    return $soma . '<br>';
}
echo somaUmAte1(5) . '<br>';

function somaRecursivaUmAte($numero) {
    if($numero === 1) {
        return 1;
    }
    echo "$numero <br>";
    return $numero + somaRecursivaUmAte($numero - 1);
}
echo somaRecursivaUmAte(5) . '<br>';
?>

<div class="titulo">Desafio</div>

<?php
$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>') {
    foreach($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        }
        if(is_numeric($elemento)){
            print_r("$nivel $elemento<br>"); 
        }
    }
}
imprimirArray($array, '*');
?>
