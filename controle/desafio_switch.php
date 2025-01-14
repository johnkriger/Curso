<div class="titulo">Desafio Switch</div>

<style>
    button, select {
        font-size: 1.8rem;
        color: white;
        background-color: blue;
        border-radius: 10px;
    }
</style>
<h5>Conversor de peso</h5>
<form action="#" method="post">
    <div>
        <input type="text" name="param">
        <select name="x" id="x">
            <option value="">De:</option>
            <option value="ton">Tonelada</option>
            <option value="arroba">Arroba</option>
            <option value="kg">Quilo</option>
            <option value="gr">Grama</option>
        </select>
        <select name="y" id="y">
            <option value="">Para:</option>
            <option value="ton">Tonelada</option>
            <option value="arroba">Arroba</option>
            <option value="kg">Quilo</option>
            <option value="gr">Grama</option>
        </select>
    </div>
    <button>Conversão</button>
</form>

<?php
$de = $_POST['x'];
$para = $_POST['y'];
$valor = $_POST['param'];
$resultado =  (is_numeric($valor)) ? $valor: 'Por favor complete todos os campos!!';
$arg1 = 0;
$arg2 = 0;

switch ($de){
    case 'ton':
        $arg1 = 1000;
        break;
    case 'arroba':
        $arg1 = 15;
        break;
    case 'kg':
        $arg1 = 1;
        break;
    case 'gr':
        $arg1 = 0.001;
        break;
    default:
        $arg1 = null;
        break;
}
switch ($para){
    case 'ton':
        $arg2 = 1000;
        break;
    case 'arroba':
        $arg2 = 15;
        break;
    case 'kg':
        $arg2 = 1;
        break;
    case 'gr':
        $arg2 = 0.001;
        break;
    default:
        $arg2 = null;
        break;
}

if((is_numeric($resultado)) and (!is_null($arg1)) and (!is_null($arg2))){
    $resultado = $resultado * $arg1;
    echo ('São ' . $resultado . ' quilos e ' . $resultado / $arg2 . $para . '!');
} else {
    echo $resultado;
}
?>
