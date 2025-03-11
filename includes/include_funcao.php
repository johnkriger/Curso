<div class="titulo">Include Função</div>

<?php
echo "Um forastero!!<br>";

function teste(){
    include('arquivo_include.php');
// só será feito o include se o método for chamado
    echo $var;
    echo soma(2, 3);
}

echo "Ali está<br>";
// echo soma(2, 2); Como o método que chama o include ainda não foi chamado não foi possível chamar o método do outro arquivo
echo teste(); // Aqui é apresentado os métodos e variáveis do arquivo q o include chamou
echo $var; // A variável não vem do outro arquivo com o include
?>