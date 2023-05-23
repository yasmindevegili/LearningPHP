<?php

    print "Digite um número: \n";
    $num1 = fgets (STDIN);
    print "Digite um número: \n";
    $num2 = fgets (STDIN);

    if($num1>$num2){
        print "O número $num1 é maior \n";
    }
    else {
        print "O número $num2 é maior \n";
    }