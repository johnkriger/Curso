<div class="titulo">Construtor & Destrutor</div>

<?php
// O construtor serve para que as classes não preciser ser criadas com um valor padrão nas veriáveis
class Pessoa{
    public $nome;
    public $idade;
    // Ao criar a função construct é passada com argumentos para que os atributos da classe sejam preenchidos 
    function __construct($novoNome, $idade){
        echo "Iniciando construtor<br>";
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    // O método destrutor não precisa de argumentos
    function __destruct()
    {
        echo "Iniciando destrutor<br>";
    }

    public function apresentacao() {
        echo "Olá, meu nome é $this->nome, e tenho $this->idade anos de idade.<br>";
    }
}
// Aqui é chamado o método construtor
$objPessoa = new Pessoa('John', '34');
$objPessoa->apresentacao();
// Aqui é chamado o método destrutor
unset($objPessoa);

$objPessoa = new Pessoa('Nick', '7');
$objPessoa->apresentacao();
// Outra forma de chamar o destrutor
$objPessoa = null;
?>