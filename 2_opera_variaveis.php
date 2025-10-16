<?php

// Montagem da url
// http://localhost/php-basicos/2_opera_variaveis.php?numero1=10&numero2=5


// Variáveis que recebem valores pela URL (Método GET)
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if (isset($numero1) && ($numero2)) {
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;
}

// Cálculos 
$soma = $numero1 + $numero2;
$multiplicacao =  $numero1 * $numero2;

//Exibe
echo "Soma: $soma <br>";
echo "Multiplicação: $multiplicacao <br>"
?>