<div class="titulo">Array basico</div>

<?php

$lista = array(1,2,3.4, "texto");
var_dump($lista);
echo '<br>';
print_r($lista);

echo '<br>'. "indice 0 = " . $lista[0];
echo '<br>'. "indice 1 = " . $lista[1];
echo '<br>'. "indice 2 = " . $lista[2];
echo '<br>'. "indice 3 = " . $lista[3];

?>