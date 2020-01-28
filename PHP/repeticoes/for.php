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

?>