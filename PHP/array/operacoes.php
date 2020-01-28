<div class="titulo">Operações Array</div>

<?php
 $dados1 = [
     "nome" => "Jose",
     "idade" =>  28
 ];

 $dados2 = [
     "naturalidade" => "Salvador"
 ];

 $dadosCompletos = $dados1 + $dados2;

 print_r($dadosCompletos);
 echo '<br>' . "Nome: " . $dadosCompletos["nome"];
 echo '<br>' . "idade: " . $dadosCompletos["idade"];
 echo '<br>' . "Naturalidade: " . $dadosCompletos["naturalidade"];
 

?>