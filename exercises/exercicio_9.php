<?php

    print "Digite um número: ";
    $num1 = fgets (STDIN);
    print "Digite outro número: ";
    $num2 = fgets (STDIN);
    print "Digite outro número: ";
    $num3 = fgets (STDIN);

    if($num1>$num2 and $num2>$num3){
        print "A sequência de números em ordem decrescente é: $num3, $num2, $num1.";
    }
    elseif($num1>$num3 and $num3>$num2){
        print "A sequência de números em ordem decrescente é: $num2, $num3, $num1.";
    }
    elseif($num2>$num1 and $num1>$num3){
        print "A sequência de números em ordem decrescente é: $num3, $num1, $num2.";
    }
    elseif($num2>$num3 and $num3>$num1){
        print "A sequência de números em ordem decrescente é: $num1, $num3, $num2.";
    }
    elseif($num3>$num1 and $num1>$num2){
        print "A sequência de números em ordem decrescente é: $num2, $num1, $num3.";
    }
    else{
        print "A sequência de números em ordem decrescente é: $num1, $num2, $num3.";
    }
    