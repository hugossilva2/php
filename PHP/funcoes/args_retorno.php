<div class="titulo">Argumentos & Retorno</div>

<?php 

function obterMensagem(){
    return 'Seja bem vindo(a)!';
}
// obterMensagem();
$mensagem = obterMensagem();
echo $mensagem;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

echo '<hr>';

function obterMensagemComNome($nome){
    return "Seja bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Hugo Silva');
echo '<br>', obterMensagemComNome('Débora Maria');

echo '<hr>';

function soma($a, $b){
    return $a + $b;
}
echo soma(3,2);







?>