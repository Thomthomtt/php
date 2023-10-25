<?php

$_numero1 = $_POST["num1"];
$_numero2 = $_POST["num2"];
$_soma = ($_numero1+$_numero2);
$_subtracao = ($_numero1-$_numero2);
$_multiplicacao = ($_numero1*$_numero2);
$_divisao = ($_numero1/$_numero2);
echo ("<h1> Operadores Matemáticos </h1>");
echo ("A soma é:".$_soma. "<br>");
echo ("A subtração é:".$_subtracao. "<br>");
echo ("A multiplicação é:".$_multiplicacao. "<br>");
echo ("A divisão é:".$_divisao. "<br>");
?>  
