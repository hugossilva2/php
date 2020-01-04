<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercício</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização Exercício</h2>
    </header>

    <nav class="navegacao">
        <a href=<?="{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>        
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            //  include( $_GET['dir'] . "/" .$_GET['file']  .  "php");
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
             ?>
        </div>  
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>

</body>

</html>