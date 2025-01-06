<div class="titulo">Desafio If</div>

<?php
$pi = 3.14;
$diferenca = $pi - pi();
if(($pi - pi()) <= 0.01){
    echo 'Essa ' . $diferenca . ' é uma diferença aceitável';
} else{
    echo 'O valor ' . $diferenca . ' não dá pra tolerar';
}

?>