<div class="titulo">Map & Filter</div>

<?php

$notas = [6.1, 7.5, 4.3, 9.1];
$notasAtual = [];

foreach($notas as $nota) {
    $notasAtual[] = round($nota);
}
print_r($notasAtual);
echo '<br>Função criada.<br><br>';

$notasAtual2 = array_map(round, $notas);
print_r($notasAtual2);
echo '<br>Array_map.<br><br>';
$aprovados = [];

foreach($notasAtual2 as $nota){
    if($nota >= 7) {
        $aprovados[] = $nota;
    }
}
print_r($aprovados);
echo '<br>Função criada.<br><br>';

function media($nota){
    return $nota>= 7;
}
$aprovados2 = array_filter($notasAtual2, media);
print_r($aprovados2);
echo '<br>Array_filter.'
?>