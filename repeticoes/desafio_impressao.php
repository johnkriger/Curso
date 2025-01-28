<div class="titulo">Desafio Impressão</div>

<?php
$personagem = [
    'Hulk',
    'Homem Aranha',
    'Viuva Negra',
    'Thor',
    'Homem de Ferro',
    'Pantera Negra',
    'Noturno',
    'Deadpool'
];

for ($i = 0; $i < count($personagem); $i++) {
    if ($i%2 == 1){
        continue;
    }
    echo $personagem[$i] . '<br>';
    if ($i > 2 ) {
        break;
    }
};

echo '<hr>';

foreach ($personagem as $i => $key) {
    if ($i % 2 != 0) {
        echo "$key <br>";
    }
}

?> 