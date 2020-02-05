<div class="titulo">Map & Filter</div>

<?php

echo 'Com Foreach <br>';

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<hr>';

echo 'Com MAP <br>';

$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);



echo '<hr>';

echo 'Com Foreach <br>';



$apenasOsAprovados1 = [];


foreach($notas as $nota) {
    if($nota >= 7){
        $apenasOsAprovados1[] = $nota;
    }
}
print_r($apenasOsAprovados1);


echo '<br>';
echo '<hr>';
echo 'Com Filter <br>';

function aprovados($nota){
    return $nota >= 7;
}
$apenasOsAprovados2 = array_filter($notas, 'aprovados');
print_r($apenasOsAprovados2);





