<?php

print "Digite um valor: \n";
$num1 = (int) fgets (STDIN);
print "Digite um valor: \n";
$num2 = (int) fgets (STDIN);
print "Digite um valor: \n";
$num3 = (int) fgets (STDIN);

if($num1 > $num2 and $num1 > $num3){
    print "O primeiro número digitado, $num1, é maior";
} 
elseif($num2 > $num1 and $num2 > $num3){
    print "O segundo número digitado, $num2, é maior";
} 
else{print "O terceiro número digitado, $num3, é maior";}