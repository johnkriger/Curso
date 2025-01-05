<div class="titulo">Operadores relacionais</div>

<?php
echo '<p>Operadores relacionais servem para ajudar nas estruturas de controle comparando valores.</p>';
echo '<p>Nesses operadores temos:<br>== Verifica se um valor é igual ao outro<br>!= Verifica se um valor é diferente do outro<br>
=== Verifica além do valor se o tipo é o mesmo<br>!==Verifica se o valor ou o tipo são diferentes<br>
<=Verifica se um valor é menor ou igual a outro<br>>=Verifica se um valor á maior ou igual a outro<br>
<Verifica se o valor é menor que o outro<br>>Verifica se o valor é maior que o outro</p><hr><p>Teste prático:</p>';

$idade = 26;
if($idade < 18){
    echo 'Com ' . $idade . ' anos é menor de idade e não pode dirigir!';
} elseif($idade >= 65) {
    echo 'Com ' . $idade . ' anos já é idoso e é mais difícil para dirigir!';
} else {
    echo 'Com ' . $idade . ' anos pode tirar carteira de motorista!';
}
?>

<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: 0px;
    }
</style>