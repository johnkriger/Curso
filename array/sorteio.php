<div class="titulo">Sorteio</div>


<?php
$personagens = [
    'Batman',
    'Homem de ferro',
    'Capitão américa',
    'Flash',
    'Hulk',
    'Locha',
    'Lanterna verde',
    'Viuva negra',
    'Tocha humana',
    'Coisa',
    'Homem aranha',
    'Robin',
    'Mário',
    'Juca',
    'Super homem'
];
$index = array_rand($personagens);
echo "<h1><center>$personagens[$index]</center></h1>"
?>