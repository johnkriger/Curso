<div class="titulo">While/Do While</div>

<p><strong>While</strong> é uma estrutura de controle para quando não sabemos quantas repetições teremos no loop. <br>
Como a condição está no início do bloco ele pode não ser executado nenhuma vez. <br></p>
<p><strong>Do While</strong> é uma variação onde a condição fica no fim do bloco, o que garante no mínimo uma execução do bloco. <br></p>


<?php
const VALOR_LIMITE = 5;
$cont = 0;
while($cont < VALOR_LIMITE) {
    echo "While $cont <br>";
    $cont++;
}
echo '<hr>';

$cont = 0;
do{
    echo "Do While $cont <br>";
    $cont++;
} while($cont < VALOR_LIMITE);
?>