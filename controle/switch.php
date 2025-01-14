<div class="titulo">Switch Case</div>

<form action="#" method="post">
    <div>
        <label for="Carro">Tipo de carro:</label>
        <select name="t" id="t">
            <option value="">Lista:</option>
            <option value="Civic">Honda Civic</option>
            <option value="HB20">Hiunday HB20</option>
            <option value="Palio">Fiat Palio</option>
            <option value="Gol">Volkswagen Gol</option>
        </select>
    </div>
    <button>Detalhes</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
        color: white;
        background-color: blue;
        border-radius: 10px;
    }
</style>

<?php
$carro = ($_POST['t']);
$valor = 0;
$km = 0;
$cor = '';
$ano = '';

switch($carro){
    case 'Civic':
        $valor = 200000;
        $km = 23000;
        $cor = 'cinza';
        $ano = '2024';
        break;
    case 'HB20':
        $valor = 45000;
        $km = 73000;
        $cor = 'branco';
        $ano = '2017';
        break;
    case 'Palio':
        $valor = 30000;
        $km = 112000;
        $cor = 'vermelho';
        $ano = '2018';
        break;
    case 'Gol':
        $valor = 65000;
        $km = 159000;
        $cor = 'azul';
        $ano = '2022';
        break;
    default:
        $escolhido = 'Por favor, selecione um carro na lista!';
}

if(!empty($carro)){
    $valor = number_format($valor, 2, ',', '.');
    $km = number_format($km, 0, ',', '.');
    $escolhido = $carro == 'Civic' ? "Você está escolhendo o $carro, o carro que um dia eu vou ter.
                            Esse é do ano $ano, tem $km km rodados, cor $cor e está por apenas $valor!" :
    "Esse é o $carro, ele é do ano $ano, como você pode ver na cor $cor está muito bonito.
                            Tem $km km rodados e está no valor de $valor!" ;
    echo $escolhido;
} else {
    echo $escolhido;
}
?>