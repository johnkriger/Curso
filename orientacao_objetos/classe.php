<div class="titulo">Classe</div>

<?php
class Pessoa {
    // Se a classe tem os atributos com valor prédefinidos não precisam ser todos informados ao fazer a instância
    public $nome = 'John Doe<br>';
    public $idade = '25<br>';
    public $sexo = 'Masculino';

    public function apresetacao() {
        // Para acessar as váriáveis deve ser utilizado o $this-> e o nome da variável
        return "Cliente $this->nome tem idade $this->idade e é do sexo $this->sexo.<br>";
    }
}
// Para instanciar a classe se usa a palavra reservada "new"
$objPessoa = new Pessoa();
$objMarcos = new Pessoa();
$objMaria = new Pessoa();

// Para inserir dados nas variáveis do objeto se usa o nome do objeto (Variável definida no
//momento da instância), a seta (->), o nome da variável e atribuir o valor como em uma variável normal
$objMarcos->nome = 'Marcos Pontes';
$objMarcos->idade = 37;
$objMaria->nome = 'Maria Figueira';
$objMaria->idade = 23;
$objMaria->sexo = 'Feminino';

// É possível chamar uma variável ou um método do objeto instanciado utilizando o nome 
//do objeto (Variável definida no momento da instância), a seta (->) e o nome da variável ou método desejado
echo $objPessoa->nome;
echo $objMarcos->apresetacao();
echo $objMaria->apresetacao();
?>