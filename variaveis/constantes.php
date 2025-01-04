<div class="titulo">Constantes</div>

<?php
echo 'Constantes tem um valor fixo, isso é, não sofrem alteração do código após serem declaradas.<br>';
echo 'Elas são declaradas com letras maiúsculas e as palavras separadas com underline e pode ser declarada com o "define()".<br>';
echo 'Ex:<br>define(TAXA_DE_JUROS, 5.9);<br>';
define('TAXA_DE_JUROS', 5.9);
echo 'A chamada é realizada assim:<br>echo TAXA_DE_JUROS;<br>';
echo TAXA_DE_JUROS . '<br>';
echo 'Também pode ser definido com "const".<br>Ex:<br>const NOVA_TAXA = 2.5;<br>';
const NOVA_TAXA = 2.5;
print_r('print_r(NOVA_TAXA);<br>' . NOVA_TAXA . '<br>');
echo 'Esse modo permite a realização de cálculos na delaração.<br>Ex:<br>const TAXA_MAIS_ALTA = 3 + 4;<br>';
const TAXA_MAIS_ALTA = 3 + 4;
echo('echo TAXA_MAIS_ALTA<br>' . TAXA_MAIS_ALTA . '<br>');
echo 'Existem algumas constantes já declaradas por padrão no PHP. <br>Ex:<br>';
echo('PHP_VERSION= ' . PHP_VERSION . '<br>');
echo('__FILE__= ' . __FILE__ . '<br>');
echo('__DIR__= ' . __DIR__ . '<br>Entre muitas outras.')
?>