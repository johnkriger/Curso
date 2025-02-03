<div class="titulo">Argumentos & Retornos</div>
<p>Retorno é quando a função devolve um valor após o seu processamento. <br>
Argumento são informações que passamos ao chamar uma função.</p>

<?php
function obterMensagem() {
    return "One thing is one thing, and another thing is another thing. <br>";
}
echo obterMensagem();

function cumprimentaOsOto($nome) {
    return "Bom dia sr(a) $nome. <br>";
}
$saudacao = cumprimentaOsOto('John');
echo $saudacao;
$saudacao = cumprimentaOsOto('Diocrécia');
echo $saudacao;
?>