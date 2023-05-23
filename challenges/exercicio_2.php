<?php

print "Digite um número: \n";
$num = fgets (STDIN);

if($num>=0){
    print "O número $num é positivo \n";
}
else {
    print "O número $num é negativo \n";
}