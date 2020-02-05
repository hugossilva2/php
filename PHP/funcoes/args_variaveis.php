<div class="titulo">Argumento/Variaveis</div>


<?php
function soma($a, $b){
    return $a + $b;
}
echo soma(5, 5) . '<br>';
echo soma(8, 7, 9) . '<br>';//php ignora parametros e excedentes

function somaCompleta(...$numeros){
    // print_r($numeros);
    $soma = 0;
    foreach($numeros as $num){
            $soma += $num;
    }
    return $soma;

}
somaCompleta(1,7,9);
echo somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array);

?>