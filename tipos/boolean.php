<div class="titulo">Tipo Booleano</div>

<?php
echo '<p><i>O booleano é um valor binário que só pode ser verdadeiro (true) ou falso (false).</i></p>';
echo '<p><i>Qualquer valor que não seja vazio (""), 0 ou "0" se for convertido para booleano é true.</i></p>';

echo '<p>var_dump(!!"") = false</p>';
var_dump(!!"");
echo '<p>var_dump(!!"0") = false</p>';
var_dump(!!"0");
echo '<p>var_dump(!!0) = false</p>';
var_dump(!!0);
echo '<p>var_dump(!!" ") = true</p>';
var_dump(!!" ");
echo '<p>var_dump(!!"00") = true</p>';
var_dump(!!"00");
echo '<p>var_dump(!!1) = true</p>';
var_dump(!!1);
echo '<p>var_dump(!!"a") = true</p>';
var_dump(!!"a");
echo '<p>var_dump(!!0.1) = true</p>';
var_dump(!!0.1);

echo '<p><i>A dupla negação (!!) converte o valor para booleano assim como o (boll)</i></p>';

echo '<p>var_dump(!!"teste") = boll(true);</p>';
var_dump(!!"teste");
echo '<p>var_dump((bool)"teste") = boll(true);</p>';
var_dump((bool)"teste");
?>