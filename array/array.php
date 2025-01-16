<div class="titulo">Array</div>

<h5>Declaração de array</h5>

<p>$aleatorio = array(12, 45, 'teste', true);<br>
$pessoa = array(<br>
    'idade' => 34,<br>
    'sexo' => 'masculino',<br>
    'estadoCivil' => 'casado'<br>
);<br>
$matriz = array(<br>
    'pessoa' => array(<br>
        'idade' => 34,<br>
        'sexo' => 'masculino',<br>
        'estadoCivil' => 'casado'<br>
    ),<br>
    'aleatorio' => array(12, 45, 'teste', true)<br>
);<br>
print_r($aleatorio);
<br>
print_r($pessoa);
<br>
print_r($matriz);</p>

<?php
$aleatorio = array(12, 45, 'teste', true);
$pessoa = array(
    'idade' => 34,
    'sexo' => 'masculino',
    'estadoCivil' => 'casado'
);
$matriz = array(
    'pessoa' => array(
        'idade' => 34,
        'sexo' => 'masculino',
        'estadoCivil' => 'casado'
    ),
    'aleatorio' => array(12, 45, 'teste', true)
);
print_r($aleatorio);
echo '<br>';
print_r($pessoa);
echo '<br>';
print_r($matriz)
?>