<div class="titulo">Desafio Operadores Logicos</div>

<!-- 
        Dois trabalhos -> terça e quinta!
        - Se os dois forem execultados -> TV de 50' e sorvete
        - Se apenas um for executado -> TV 30' e sorvete 
        - Se nenhum dos dois forem realizados -> a Familia fica em casa e mais saudavel
-->

<form action="#" method="post">
    <div>
    <label for="t1">Trabalho 01 (Terça):</label>
    <select name="t1" id="t1">
    <option value="1">Executado</option>
    <option value="0">Não Executado</option>
    </select>
    </div>
    <div>
    <label for="t2">Trabalho 02 (Quinta):</label>
    <select name="t2" id="t2">
    <option value="1">Executado</option>
    <option value="0">Não Executado</option>
    </select>
    </div>
    <button>Executar</button>
</form>

<style>
button, select {
    font-size: 1.8rem;
}
</style>


<?php
//resposta do professor

if (isset($_POST['t1']) && isset($_POST['t1'])) {

        $t1 = $_POST['t1'];
        $t2 = $_POST['t2'];
        $tv =' ';
        $sorvete = false;

        if ($t1 and $t2) {
            $tv = '50"';
        }elseif ($t1 xor $t2) {
        $tv = '32"';
        }
        if ($t1 or $t2) {
            $sorvete = true;
        }
        if ($tv) {
        $resultado = "Vamos comprar uma 📺 de $tv";
        }else{
            $resultado = " Sem 📺 dessa vez :( ";
        }

        $saudavel = !$sorvete;

        if($saudavel){
            $resultado .= '<br> Estamos mais saudáveis';
        }else {
            $resultado .= '<br> 🍦 Liberado ✨✨✨';
        }

        echo "<p>$resultado</p>";
}




//Minha Resposta ao Desafio
// $trabalhoTer = $_POST['t1'];
// $trabalhoQui = $_POST['t2'];

// if ($trabalhoTer and $trabalhoQui == true) {
//     echo "TV de 50' e Sorvete";
// } elseif($trabalhoTer or $trabalhoQui == true) {
//     echo "TV de 32' e Sorvete";
// }else {
//     echo " Familia fica em casa e mais Saudavel";
// }






