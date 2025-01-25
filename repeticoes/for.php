<div class="titulo">Laço For</div>

<p>O laço for repete uma ação percorrendo instruções com base em um valor predefinido de repetições.<br></p>

<?php
for ($cont = 0 ; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';
echo '<p>Podemos usar o for para percorrer arrays.</p>';
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

for ($pos = 0; $pos<count($meses); $pos++) {
    echo "$meses[$pos] <br>";
};

echo '<hr>';
echo '<p>Para percorrer um array de arrays podemos colocar um for dentro do outro.</p>';
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
for ($i = 0; $i<count($aleatorio); $i++) {
    echo "Posição $i do array externo. <br>";
    for ($j = 0; $j<count($aleatorio[$i]); $j++){
        echo "{$aleatorio[$i][$j]}<br>";
    };
    echo '<br>';
};

?>