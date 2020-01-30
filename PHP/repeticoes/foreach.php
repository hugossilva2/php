<div class="titulo">ForEach</div>

<?php   

  $array = [  
              1 => 'Domingo',
              'Segunda',
              'Terça',
              'Quarta',
              'Quinta',
              'Sexta',
              'Sabado'
            ];

print_r($array);
echo "<br>";
echo "<hr>";
foreach ($array as $valor) {
  echo "$valor <br>";
}
echo "<br>";
echo "<hr>";

foreach ($array as $key => $value) {
   echo "$key => $value <br>";
}

echo "<br>";
echo "<hr>";

$matrix = [
            ['a','e','i','o', 'u'],
            ['b','c','d']
];

foreach ($matrix as  $linha) {
    foreach($linha as $letra){
        echo"$letra";
    }
    echo "<br>";
}
echo "<br>";
echo "<hr>";

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);
echo "<br>";
echo "<hr>";

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as $dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);
?>