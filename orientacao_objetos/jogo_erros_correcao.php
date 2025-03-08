<div class="titulo">Jogo dos Erros Correção</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
        public function metodo3() {
        echo "estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro){
        
    }

    public function metodo1(){
    
    }
    public function metodo2($parametro){
    
    }
}

$ex = new Classe($var);
$ex->metodo3();
?>
