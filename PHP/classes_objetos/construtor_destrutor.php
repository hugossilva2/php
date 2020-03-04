<div class="titulo">Construtor & Destrutor</div>


<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "E morreu!!!";
    }

    public function apresentar(){
        echo "Nome: {$this->nome} <br> Idade: {$this->idade} anos <br>";
    }
}

$pessoa1 = new Pessoa('Hugo Silva', 35);
$pessoa1->apresentar();