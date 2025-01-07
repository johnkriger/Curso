<div class="titulo">Desafio If</div>

<div>
    <h5>Código com operadores relacionais:</h5>
    $pi = 3.14;<br>
    $diferenca = $pi - pi();<br>
    if(($pi - pi()) <= 0.01){<br>
        echo 'Essa ' . $diferenca . ' é uma diferença aceitável';<br>
    } else{<br>
        echo 'O valor ' . $diferenca . ' não dá pra tolerar';<br>
    }<br>Resultado: <br>
</div>
<?php
$pi = 3.14;
$diferenca = $pi - pi();
if(($pi - pi()) <= 0.01){
    echo 'Essa ' . $diferenca . ' é uma diferença aceitável';
} else{
    echo 'O valor ' . $diferenca . ' não dá pra tolerar';
}
echo '<hr>'
?>
<div>
    <h5>Código com operadores lógicos:</h5>
    $idade = 70;<br>
    $sexo = 'F';<br>
    $contribuicao = 'S';<br>
    $condicaoHomem = ($idade >= 65 and $sexo == 'M');<br>
    $condicaoMulher = ($idade >= 60 and $sexo == 'F');<br>
    <br>
    if($contribuicao == 'S' and ($condicaoHomem or $condicaoMulher)){<br>
        echo 'Pode se aposentar!';<br>
    } else {<br>
        echo 'Trabalhe mais um pouco';<br>
    }<br>Resultado: <br>
</div>
<?php
$idade = 70;
$sexo = 'F';
$contribuicao = 'S';
$condicaoHomem = ($idade >= 65 and $sexo == 'M');
$condicaoMulher = ($idade >= 60 and $sexo == 'F');

if($contribuicao == 'S' and ($condicaoHomem or $condicaoMulher)){
    echo 'Pode se aposentar!';
} else {
    echo 'Trabalhe mais um pouco';
}
?>