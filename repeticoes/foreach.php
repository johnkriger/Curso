<div class="titulo">Foreach</div>
<p>O forecah é uma forma mais prática de percorrer arrays.</p>

<?php
$meses = [
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
];
foreach ($meses as $mes){
    echo "$mes <br>";
};
echo '<hr>';
echo 'Podemos apresentar também o índice junto com o valor. <br>';
foreach ($meses as $indice => $mes){
    echo "$indice => $mes <br>";
};
echo '<hr>';
echo 'E podemos percorrer matrizes com um foreach dentro do outro. <br>';
$aleatorio = [
    [
        'Hulk',
        'Homem Aranha',
        'Viuva Negra',
        'Thor',
        'Homem de Ferro',
        'Pantera Negra',
        'Noturno',
        'Deadpool'
    ],
    [
        'Flash',
        'Batman',
        'Lanterna Verde',
        'Arqueiro Verde',
        'Robin',
        'Mulher Maravilha'
    ]
];
foreach($aleatorio as $linha) {
    print_r("<br>");
    foreach($linha as $heroi) {
        echo"$heroi <br>";
    };
};
?>