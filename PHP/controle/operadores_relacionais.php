<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1);//true
echo "<br>";
var_dump(1 < 1);//false
echo "<br>";
var_dump(2 > 1);//true
echo "<br>";
var_dump(3 <= 2);
echo "<br>";
var_dump(1 >= 1);
echo "<br>";
var_dump(1 != 1);
echo "<br>";
var_dump(1 <> 2);
echo "<br>";
var_dump(1 == "1");//true
var_dump(1 === "1");//false
echo "<p> Relacionais no IF/Else</p><hr> ";



$idade = 17;


if ($idade < 18) {
    echo " EU sou Menor de Idade pois tenho $idade anos";
} elseif ($idade <= 65) {
    echo " Eu sou Adulto pois tenho $idade anos";
}else {
    echo "Aposentado pois tenho $idade anos";
}

echo "<p>Space Ships</p><hr> ";
var_dump(5 <=> 1);//space ship se o operador da direita for maior retorna valor 1
var_dump(5 <=> 5);//space ship se os operadores forem iguais retorna valor 0
var_dump(1 <=> 5);//space ship se o operador da esquerda for maior retorna valor -1
echo "<br>";
?>

<style>
 p{
     margin-bottom: -20px;
    
 }

 hr {
     border: 1px solid;
 }


</style>


