<div class="titulo">Desafio Operadores</div>

<ul>Dois trabalhos -> terça e quinta!
    <li>Se os dois forem executados -> TV 50' e Sorvete</li>
    <li>Se apenas um for executado -> TV 32' e Sorvete</li>
    <li>Se nenhum for executado -> Fica em casa mais saudável</li>
</ul>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value= >Escolha uma opção:</option>
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value= >Escolha uma opção:</option>
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

$terca = $_POST['t1'];
$quinta = $_POST['t2'];

if(($terca == null) or ($quinta == null)) {
    echo "Alguma das opções ficou em branco, tente novamente";
} else if($terca === '1' and $quinta === '1'){
    echo "TV 50' e Sorvete";
} else if($terca === '1' xor $quinta === '1') {
    echo "TV 32' e Sorvete";
} else {
    echo "Fica em casa mais saudável";
}


