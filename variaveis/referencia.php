<div class="titulo">Variáveis por referência</div>

<?php
echo 'Variáveis podem ser atribuidas por valor ou por referência.<br>';
echo 'Uma atribuição por valor é o padrão.<br>$a = 2, $b = $a<br>Nesse último caso de $b = $a, é feito uma cópia do valor de $a em $b, e se $b sofrer alguma alteração $a permanece intacto.<br>';
echo 'Isso não acontece quando fazemos uma atribuição por referência. Nesse caso não é feito uma cópia do valor, e sim a segunda variável é apontada para o mesmo local na memória onde está a primeira variável.<br>';
echo 'Uma variável é atribuida por referência quando tem um & (e comercial) antes da variável.<br>$b = &$a<br>Nesse caso toda alteração realizada na variável $b será refletida em $a.'
?>