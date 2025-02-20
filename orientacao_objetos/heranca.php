<div class="titulo">Herança</div>

<?php
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade =  $idade;
            echo "Pessoa criada<br>";
        }

        function __destruct(){
            echo "Pessoa destruida<br>";
        }

        public function apresenta(){
            return "$this->nome, idade $this->idade<br>";
        }
    }

    class Usuario extends Pessoa {
        public $login;

        function __construct($nome, $idade, $login)
        {
            // Sobrescreve as informações do método pai
            // $this->nome = $nome;
            // $this->idade = $idade;

            // Chama o __construct do metodo pai
            parent::__construct($nome, $idade);
            $this->login = $login;
            echo "Usuário criado<br>";
        }
        function __destruct()
        {
            echo 'Usuário destruido<br>';
        }

        public function apresenta()
        {
            // Sobrescreve as informações do método pai
            // return "@$this->login: $this->nome, idade $this->idade";

            // Chama o método da classe pai
            return "@$this->login: " . parent::apresenta();
        }
    }

    $obPessoa = new Pessoa('André', 55);
    $obUsuario = new Usuario('Armando Pinto', 34, 'Perigoso');
    echo $obPessoa->apresenta();
    echo $obUsuario->apresenta();
    unset($obPessoa, $obUsuario);
?>