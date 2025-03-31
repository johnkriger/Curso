<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="source/css/estilos.css">
    <title>Projeto DEV</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Indice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <?= require_once('menu.php')?>
        </div>
    </main>
    <footer class="rodape">
        TR&INAM&NTO © <?= date('d/m/Y');?>
    </footer>
</body>
</html>