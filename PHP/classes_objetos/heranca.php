<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada <br>';
    }

    function __destruct(){
        echo "Pessoa diz: Tchau!! <br>";
    }

    public function apresentar(){
        echo "Nome: {$this->nome} <br> Idade: {$this->idade} anos <br>";
    }

}

class Usuario extends Pessoa {

    public $login;

    function __construct($nome, $idade, $login){
        parent ::__construct($nome, $idade);
        $this->login = $login;
    }
    function __destruct(){
        parent :: __destruct();
        echo 'Usuario Diz: Tchau!!';
        
    }

    public function apresentar(){
        parent::apresentar();
        echo "Login: @{$this->login} <br> ";
        
    }    

}

$usuario = new Usuario("Hugo Silva", 35, "hugossilva2");
$usuario->apresentar();
// $usuario = null;

echo "<hr>";

$usuario1 = new Usuario("Debora Maria", 34, "hdsj");
$usuario1->apresentar();
// $usuario1 = null;