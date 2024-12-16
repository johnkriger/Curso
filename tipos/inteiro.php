<div class="titulo">Tipo Inteiro</div>
<?php
    echo 11; //O tipo inteiro é formado por números positivos ou negativos que não sejam divididos por virgula
    echo '<br>'; // A tag '<br>' insere uma nova linha no interpretador 

    var_dump(11); // O var_dump() imprime a informação e tráz mais informações sobre ela
    echo '<br>';

    echo PHP_INT_MAX, '<br>'; // Função que apresenta o maior número inteiro suportado pela máquina
    echo PHP_INT_MIN, '<br>'; // Função que apresenta o menor número inteiro suportado pela máquina
    echo 017, '<br>'; // Base octal pode conter valores apenas de 0 a 7
    echo 0b01001101, '<br>'; //Base binária, pode conter apenas valores "0" ou "1"
    echo 0x117acf0; //Base exadecimal, pode conter valores de 0 a 9 e letras de "a" a "f"
?>