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
                    <h3>Básico</h3>
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
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=operacoes">Op. Aritiméticas</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=operacoes">Desafio</a></li>
                        
                    </ul>

                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                        
                    </ul>
                    
                </div>

                <div class="modulo azul">
                    <h3>Variavéis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaves&file=basico">Variaves</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=variaves&file=desafio_equacao">Desafio Equação</a></li>
                        
                    </ul>
                     <ul>
                        <li><a href="exercicio.php?dir=variaves&file=atribuicao">Atribuição</a></li>
                        
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=variaves&file=interpolacao">Interpolação</a></li>
                        
                    </ul>
                    
                    <ul>
                        <li><a href="exercicio.php?dir=variaves&file=valor_referencia">Valor vs Referência</a></li>
                        
                    </ul>
                     <ul>
                        <li><a href="exercicio.php?dir=variaves&file=constante">Constantes</a></li>
                        
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