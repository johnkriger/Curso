<div class="titulo">Jogo dos Erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata extends Template {//Classe abstrata usa "implements" pra extender interfac | abstract class ClasseAbstrata implements Template { 
    public function metodo3() {
        echo "estou funcionando";
    }
}

class Classe implements ClasseAbstrata { //Classe usa "extends" pra extender outra classe | class Classe extends ClasseAbstrata {
    function __construct($parametro){
        
    }
    /*Os métodos informados nas interfaces e nas classes abstratas são obrigados a serem declarados na classe que estende elas,
    a não ser que tenha sido inplementado na classe abstrata

    public function metodo1(){
    
    }
    public function metodo2($parametro){
    
    }*/
}

$ex = Classe(); //$ex = new Classe($parametro); |para instanciar uma classe preciamos do "new", e o construtor esá exigindo um parametro para criar a instancia
$ex.metodo3();  //$ex->metodo3;
?>