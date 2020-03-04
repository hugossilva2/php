<div class="titulo">Visibilidade</div>


<?php

class A {
    public $publico = 'publico';
    protected $protegido = 'protegido';
    private $privado   = 'privado';

    public function mostrarA(){
        echo "Classe A) Publico = {$this->publico} <br>";
        echo "Classe A) Protegido = {$this->protegido} <br>";
        echo "Classe A) Privado = {$this->privado} <br>";
    }

    private function naoMostrar(){
        echo "Não vou imprimir!";
    }
}

$a = new A;
$a->mostrarA();