<div class="titulo">Switch</div>

<?php
$categoria  = 'Suv';

switch (strtolower($categoria)) {
    case 'luxo':
       $carro = 'Mercedes';
       $preco = 250000;
        break;
    case 'suv':
       $carro = 'Renegate';
       $preco = 80000;
        break;
    case 'sedan':
       $carro = 'Etios';
       $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo  "Carro: $carro <br>Preço: R$ $precoFormatado <br>";