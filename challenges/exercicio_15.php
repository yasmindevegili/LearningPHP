<?php

    print "Digite um número: ";
    $num1 = fgets (STDIN);
    print "Digite outro número: ";
    $num2 = fgets (STDIN);
    print "Digite outro número: ";
    $num3 = fgets (STDIN);
    print "Digite outro número: ";
    $num4 = fgets (STDIN);
    print "Digite outro número: ";
    $num5 = fgets (STDIN);

    if($num1>$num2 and $num1>$num3 and $num1>$num4 and $num1>$num5){
        print "O maior número é $num1.";
    }
    elseif($num2>$num1 and $num2>$num3 and $num2>$num4 and $num2>$num5){
        print "O maior número é $num2.";
    }
    elseif($num3>$num1 and $num3>$num2 and $num3>$num4 and $num3>$num5){
        print "O maior número é $num3.";
    }
    elseif($num4>$num1 and $num4>$num2 and $num4>$num3 and $num4>$num5){
        print "O maior número é $num4.";
    }
    else{
        print "O maior número é $num5.";
    }
    