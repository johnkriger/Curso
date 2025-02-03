<div class="titulo">Funções & Escopo</div>
<p>Métodos ou funções são usados para que não precisemos repetir linhas de código! <br>
O escopo diz respeito a acessibilidade de variáveis em partes distintas do projeto. <br></p>

<?php
function imprimirMensagem() {
echo 'Hi, how are you today?';
}

imprimirMensagem();
imprimirMensagem();

$variavel = 'Sem modificação';
echo "Antes $variavel.<br>";

function trocaValor() {
    $variavel = 'Modificada';
    echo "Dentro $variavel.<br>";
}

trocaValor();
echo "Depois $variavel<br>";

function tenteOutraVez() {
    global $variavel;
    $variavel = 'modificar';
    echo "Agora sim vai $variavel.<br>";
}
tenteOutraVez();
echo "Depois $variavel<br>";
?>