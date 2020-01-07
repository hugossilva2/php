<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma String';
echo '<br>';
var_dump("eu também");
echo '<br>';


//concatenação com sinal . 
echo "nos tambem" .  " somos";
echo '<br>', "tambem aceito", " virgulas", "<br>";
print ("tambem tem a função print");

//Algumas funções
echo '<br>' . strtoupper("maximizado");
echo '<br>' . strtolower("MINIMIZADO");
echo '<br>' . ucfirst("só a primeira letra");
echo '<br>' . ucwords("nadson hugo cardoso da silva");
echo '<br>' . strlen("quantas letras?");
echo '<br>' . mb_strlen("Eu também");
echo '<br>' . substr("só uma parte mesmo", 7,6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
