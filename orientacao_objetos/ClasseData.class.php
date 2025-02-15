<div class="titulo">Classe Data</div>

<?php
class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function mostraData(){
        return "$this->dia/$this->mes/$this->ano";
    } 
}
$objData = new Data;

$objData->dia = 29;
$objData->mes = 07;
$objData->ano = 1990;


echo $objData->mostraData();
?>