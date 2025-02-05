<div class="titulo">Argumento Variável</div>
<p>Argumentos variáveis podem ser usado quando não sabemos exatamente quantos argumentos iremos precisar no método.</p>
<?php

function pessoasClube($titular, ...$dependentes) {
    echo "Titular: $titular.<br>";
    foreach($dependentes as  $dependente) {
        echo "Dependente: $dependente.<br>";
    }
}
pessoasClube('John','Denise', 'Nick')
?>