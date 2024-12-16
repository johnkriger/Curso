<div class="titulo">Tipo Inteiro</div>
<p><i>"O tipo inteiro é formado por números positivos ou negativos que não sejam divididos por virgula."</i></p>
<?php
    echo 11;
    echo '<br>';
    echo '<p><i>"A tag br insere uma nova linha no interpretador."</i></p>';

    var_dump(11);
    echo '<p><i>"O var_dump() imprime a informação e tráz mais informações sobre ela."</i></p><br>';

    echo PHP_INT_MAX, '<p><i>"Função que apresenta o maior número inteiro suportado pela máquina."</i></p><br>'; 
    echo PHP_INT_MIN, '<p><i>"Função que apresenta o menor número inteiro suportado pela máquina."</i></p><br>';
    echo 017, '<p><i>"Base octal pode conter valores apenas de 0 a 7."</i></p><br>';
    echo 0b01001101, '<p><i>"Base binária, pode conter apenas valores (0) ou (1)."</i></p><br>';
    echo 0x117acf0, '<p><i>"Base exadecimal, pode conter valores de 0 a 9 e letras de (a) a (f)."</i></p><br>';
?>