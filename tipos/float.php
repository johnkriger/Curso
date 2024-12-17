<div class="titulo">Tipo Float</div>
<p><i>"O tipo float é composto por números com casas decimais, sendo elas divididas pelo ".", no formato americano."</i></p>

<?php
echo 1.1, '<br>';
var_dump(1.0);
echo '<p><i>"Se for inserido um valor com casa decimal inválida (.0), mesmo assim o sistema vai interpretar como float.
<br> Acima temos declarado o valor 1.0."</i></p><br>';
echo PHP_FLOAT_MAX, '<p><i>"Função com o valor máximo armazenado pelo float."</i></p><br>';
echo PHP_FLOAT_MIN, '<p><i>"Função com o valor mínimo armazenado pelo float."</i></p><br>';
echo 1.2e3;
echo 13E-3;
?>