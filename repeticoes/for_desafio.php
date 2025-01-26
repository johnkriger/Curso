<div class="titulo">Desafio Laço For</div>

<?php
echo 'Primeira tentativa.<br>';
$jogoDaVelha = '#';
for ($cont = 0; $cont < 5; $cont++) {
    echo "$jogoDaVelha <br>";
    $jogoDaVelha .= '#';
};

echo "<hr>";

echo 'Segunda tentativa. <br>';
$sustenido = [
    '#',
    '##',
    '###',
    '####',
    '#####'
];
for ($pos = 0; $pos<count($sustenido); $pos++) {
    echo $sustenido[$pos] . '<br>';
};
echo '<hr>';
echo 'Outra possibilidade<br>';

for ($cerquilha = '#'; $cerquilha !== '######'; $cerquilha .= '#') {
    echo "$cerquilha <br>";
};

?>