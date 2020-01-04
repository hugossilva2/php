<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Ìndice dos Execícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nave class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=html">Interação Html</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=css">Interação CSS</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        
                    </ul>
                </div>
                
            </nave>

        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>

</body>

</html>