<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="20011273-5_John_Kryger/css/estilos.css">
    <link rel="stylesheet" href="20011273-5_John_Kryger/css/exercicios.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?>
            class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                // include('/basico/ola.php'); //dessa forma é passado o caminho do arquivo desejado
                // include($_GET['dir'] . "/" . $_GET['file'] . ".php"); // dessa forma tudo que estiver dentro de [''] tem q ser passado por referência na url
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); // dessa forma a concatenação é feita sem usar o .
            ?>
        </div>
    </main>
    <footer class="rodape">
        TR&INAM&NTO © <?= date('d/m/Y');?>
    </footer>
</html>