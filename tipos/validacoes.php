<div class="titulo">Validação de tipos</div>
<p><i>Há funções que validam o tipo de um item informado retornando um valor Booleano de true ou false, são elas:</i></p><br>

<?php
echo '<h3>is_int()</h3>';
echo 'var_dump(is_int(1)) = ';
var_dump(is_int(1));
echo '<br>var_dump(is_int("teste")) = ';
var_dump(is_int("teste"));
echo '<br>var_dump(is_int("1")) = ';
var_dump(is_int("1"));
echo '<br>var_dump(is_int(1.5)) = ';
var_dump(is_int(1.5));
echo '<br>var_dump(is_int(true)) = ';
var_dump(is_int(true));

echo '<h3>is_string()</h3>';
echo 'var_dump(is_string(1)) = ';
var_dump(is_string(1));
echo '<br>var_dump(is_string("teste")) = ';
var_dump(is_string("teste"));
echo '<br>var_dump(is_string("1")) = ';
var_dump(is_string("1"));
echo '<br>var_dump(is_string(1.5)) = ';
var_dump(is_string(1.5));
echo '<br>var_dump(is_string(true)) = ';
var_dump(is_string(true));

echo '<h3>is_float()</h3>';
echo 'var_dump(is_float(1)) = ';
var_dump(is_float(1));
echo '<br>var_dump(is_float("teste")) = ';
var_dump(is_float("teste"));
echo '<br>var_dump(is_float("1")) = ';
var_dump(is_float("1"));
echo '<br>var_dump(is_float(1.5)) = ';
var_dump(is_float(1.5));
echo '<br>var_dump(is_float(true)) = ';
var_dump(is_float(true));

echo '<h3>is_bool()</h3>';
echo 'var_dump(is_bool(1)) = ';
var_dump(is_bool(1));
echo '<br>var_dump(is_bool("teste")) = ';
var_dump(is_bool("teste"));
echo '<br>var_dump(is_bool("1")) = ';
var_dump(is_bool("1"));
echo '<br>vard_dump(is_bool(1.5)) = ';
var_dump(is_bool(1.5));
echo '<br>var_dump(is_bool(true)) = ';
var_dump(is_bool(true));

echo '<h3>is_numeric()</h3>';
echo 'var_dump(is_numeric(1)) = ';
var_dump(is_numeric(1));
echo '<br>var_dump(is_numeric("teste")) = ';
var_dump(is_numeric("teste"));
echo '<br>var_dump(is_numeric("1")) = ';
var_dump(is_numeric("1"));
echo '<br>vard_dump(is_numeric(1.5)) = ';
var_dump(is_numeric(1.5));
echo '<br>var_dump(is_numeric(true)) = ';
var_dump(is_numeric(true));

echo '<h3>Outras validações</h3>';
echo 'Existem outras validações como is_array(), is_object(), is_file(), isset(), etc.';
?>