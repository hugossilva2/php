<div class="titulo">Classe Data</div>



<?php

class Data{
    public $dia = 01;
    public $mes = 12;
    public $ano = 1970;

    public function apresentar(){
        return "Hoje é : {$this -> dia}/{$this ->mes}/{$this ->ano}";

    }

}
$d1 = new Data();
echo $d1-> apresentar() . '<br>';

$d2 = new Data();
$d2-> dia = date('d');
$d2-> mes = date('m');
$d2-> ano = date('Y');
echo $d2-> apresentar() . '<br>';
$niver2 = new Data();
$niver2-> dia = 25;
$niver2-> mes = 04;
$niver2-> ano = 1984;
echo $niver2-> apresentar() . '<br>';
$casamento = new Data();
$casamento-> dia = 05;
$casamento-> mes = 01;
$casamento-> ano = 2013;
echo $casamento-> apresentar() . '<br>';

