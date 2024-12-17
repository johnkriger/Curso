<div class="titulo">Operações Aritméticas</div>
<p><i>"O PHP pode processar cálculos com números do tipo inteiro e do tipo float separadamente ou misturados."</i></p>

<?php
echo '<p> 1+1 = ' . (1+1) .'</p>', '<p><i>"Soma de dois inteiros."</i></p><br>';
echo '<pre> 2+5.2 = '; var_dump(2+5.2); '</pre>';
echo '<pre> 2+5.0 = '; var_dump(2+5.0); '</pre>';
echo '<p><i>"Soma de um inteiro com um float."</i></p><br>';
echo '<p> 10-2 = ' . (10-2) .'</p>', '<p><i>"Subtração de inteiros."</i></p><br>';
echo '<p> 2*5 = ' . (2*5) .'</p>', '<p><i>"Multiplicação de inteiros."</i></p><br>';
echo '<p> 11/4 = ' . (11/4) .'</p>', '<p><i>"A divisão de inteiros pode resultar em um float."</i></p><br>';
echo '<p> 11/4 = ' . intdiv(11,4) .'</p>', '<p><i>"Usar a função intdiv() para que isso não aconteça."</i></p><br>';
echo '<p> 11/4 = ' . round(11/4) .'</p>', '<p><i>"A função round() arredonda o valor da divisão."</i></p><br>';
echo '<p> 11/2 = ' . (11%2) .'</p>', '<p><i>"O módulo (%) traz o resto de uma divisão."</i></p><br>';
echo '<p> 7/0 = ' . (7/0) .'</p>', '<p><i>"Números divididos por 0 retornam INF (infinito)."</i></p><br>';
echo '<p> 4² = ' . (4**2) .'</p>', '<p><i>"O calculo com exponenciação é feito com 2* (ex 4**2)."</i></p><br>';
echo '<p><i>"A ordem de realização dos cálculos segue as mesmas regras da matemática."</i></p><br>';