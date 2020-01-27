<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade"=> 35,
    "cor"=> "Verde",
    "peso"=> 84.6
);
print_r($dados);
echo '<br>' . "Minha Idade é : " . $dados["idade"];
echo '<br>' . "Minha Cor preferida é : " . $dados["cor"];
echo '<br>' . "Meu peso é : " . $dados["peso"] . " kg";

?>