<div class="titulo">Laço For</div>

<?php

echo "Declarando todas as sentenças" . "<br>";
for ($i=0; $i <= 5; $i++) { 
   echo 'Primeiro For i = ' . $i . '<br>';
}

echo "Continua" . "<br>";
echo "omitindo a primeira sentença" . "<br>";
for (; $i <= 10 ; $i++) { 
    echo 'Segundo For i = ' . $i . '<br>';
}
echo "omitindo a primeira e a Ultima sentença" . "<br>";
for (; $i <=15;){
    echo 'Terceiro For i = ' . $i . '<br>';
    $i++;

}

    $array = ['Domingo',
              'Segunda',
              'Terça',
              'Quarta',
              'Quinta',
              'Sexta',
              'Sabado'];

print_r($array);
echo "<br>";
echo "<hr>";

for ($i=0; $i < count($array); $i++) { 
    echo "{$array[$i]} <br>";
    # code...
}
echo "<hr>";
$matrix = [
            ['a','e','i','o', 'u'],
            ['b','c','d']
];

for ($i=0; $i < count($matrix) ; $i++) {
    for ($j=0; $j < count($matrix[$i]) ; $j++) { 
        echo "{$matrix[$i] [$j]}";
    } 
    echo "<br>";
}

echo "<hr>";
echo "Desafio For";
echo "<br>";
$impressao = '';
for ($cont = 1; $cont <= 5; $cont++){
    $impressao .= '#';
    echo "$impressao <br>";
}

echo "<hr>";
For (
    $impressao2 ='#';
    $impressao2 !== '######';
    $impressao2 .= '#'
)
{
    echo "$impressao2 <br>";
}




?>