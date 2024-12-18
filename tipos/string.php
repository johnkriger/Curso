<div class="titulo">Tipo String</div>

<?php
echo 'Uma string é um conjunto de caracteres<br>';
echo 'Pode ser usado aspas duplas ou simples nas strings';
var_dump('O var_dump imprime as strings e mostra quantos caracteres ela tem');

echo '<h3><i>Concatenação</i></h3>';
echo 'Para concatenação ' . 'é usado um ponto final (.).<br>';
print 'Também podemos usar o print.<br>';

echo '<h3><i>Algumas funções</i></h3>';
echo 'strtoupper() coloca todo o texto em maiúsculas. ' . strtoupper('coloca todo o texto em maiúsculas.<br>');
echo 'strtolower() COLOCA TODO O TEXTO EM MINÚSCULAS. ' . strtolower('COLOCA TODO O TEXTO EM MINÚSCULAS.<br>');
echo 'ucfirst() coloca a primeira letra de uma frase em maiúscula. ' . ucfirst('coloca a primeira letra de uma frase em maiúscula.<br>');
echo 'ucwords() coloca a primeira letra de cada palavra em maiúscula. ' . ucwords('coloca a primeira letra de cada palavra em maiúscula.<br>');
echo 'strlen() Conta quantos caracteres tem na string. (Para contar corretamente caracteres com acentos de ser usado o mb_strlen()) ';
echo strlen('strlen() Conta quantos caracteres tem na string. (Para contar corretamente caracteres com acentos de ser usado o mb_strlen())') . '<br>';
echo 'substr("Mostra apenas uma parte do texto informado.", 7, 7) ' . substr("Mostra apenas uma parte do texto informado.",7, 7) . '<br>';
echo 'str_replace("definida", "informada", "Troca a palavra definida no primeiro parâmetro pela definida no segundo. Funciona em todas as ocorrências.")<br>';
echo str_replace("definida", "informada", "Troca a palavra definida no primeiro parâmetro pela definida no segundo. Funciona em todas as ocorrências.");
echo 'strpos("!AbcaBcabc", "abc") retorna a posição do item encontrado. Nesse caso será diferenciado maiúsculas e minúsculas. ' . strpos("!AbcaBcabc", "abc") . '<br>';
echo 'stripos("!AbcaBcabc", "abc") retorna a posição do item encontrado. Nesse caso não será diferenciado maiúsculas e minúsculas. ' . stripos("!AbcaBcabc", "abc");
?>