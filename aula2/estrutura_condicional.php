<?php
$_valor1 = true;
$_valor2 = false;

echo (($_valor1 and $_valor1) ."<br>");
echo (($_valor1 and $_valor2) ."<br>");
echo (($_valor2 and $_valor1) ."<br>");
echo (($_valor2 and $_valor2) ."<br>");

echo (($_valor1 or $_valor1) ."<br>");
echo (($_valor1 or $_valor2) ."<br>");
echo (($_valor2 or $_valor1) ."<br>");
echo (($_valor2 or $_valor2) ."<br>");
?>
