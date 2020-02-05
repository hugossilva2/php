<div class="titulo">Argumentos Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem Vindo, $nome $sobrenome";
}

echo saudacao() . '<br>';

echo saudacao("Hugo", "Silva");


?>