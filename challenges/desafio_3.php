<?php 

print "digite seu salario atual:";
$salario = (int) fgets (STDIN);

print "digite a porcentagem de aumento:";
$porcentagem = (int) fgets (STDIN);

$novo_salario = $salario + ($salario * $porcentagem/100);

$aumento = $novo_salario - $salario;

print "seu novo salario é: $novo_salario";
print "foi um aumento de: $aumento"; 


