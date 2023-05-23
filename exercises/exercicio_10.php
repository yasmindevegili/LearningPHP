<?php

    print "Digite a: \n";
    $a = (integer) fgets (STDIN);
    print "Digite b: \n";
    $b = (integer) fgets (STDIN);
    print "Digite c: \n";
    $c = (integer) fgets (STDIN);

    $delta = pow($b,2)-4*$a*$c;
    $x1 = (-$b + sqrt($delta))/(2*$a);
    $x2 = (-$b - sqrt($delta))/(2*$a);
    print "O delta é $delta \n";
    if($a = 0){
        print "A equação não é de segundo grau, algoritmo encerrado.";
    }
    elseif($delta<0){
        print "A equação não possui raízes reais, algoritmo encerrado";
    }
    elseif($delta == 0){
        print "A equação possui apenas uma raíz real: $x1";
    }
    else{
        print "As raízes encontradas foram: $x1 e $x2";
    }