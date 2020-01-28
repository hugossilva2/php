<div class="titulo">Array Multidimensional</div>

<?php
$dados = [
    [
        "nome" => "Hugo",
        "idade" => 35,
        "cidade" => "Salvador"
    ],
    [
      "nome" => "Debora",
        "idade" => 34,
        "cidade" => "Coaraci"   
    ]
];
print_r ($dados);

$dados [] = [
     "nome" => "Sõnia",
        "idade" => 51,
        "cidade" => "Itabuna"
];
$dados[0] ["sexo"] = "Masculino";
$dados[1] ["sexo"] = "Feminino";
$dados[2] ["sexo"] = "Feminino";
print_r ($dados);
echo '<br>';
print_r ($dados[0]);
echo '<br>';
print_r ($dados[1]);
echo '<br>';
print_r ($dados[2]);

?>