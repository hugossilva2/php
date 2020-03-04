<div class="titulo">Classes</div>

<?php

class Cliente {
    //atributos
    public  $nome = 'Anônimo';
    public  $idade = 18;

    public function apresentar () {
         echo "Nome: {$this -> nome} <br> Idade: {$this -> idade} <br>";
    }
}

$c1 = new Cliente();
$c1->nome = "Hugo Silva";
$c1->idade = 35;
$c1-> apresentar();

$c2 = new Cliente();
$c2->nome = "Débora Maria";
$c2->idade = 34;
$c2-> apresentar();

$c3 = new Cliente;
$c3-> apresentar();

?>