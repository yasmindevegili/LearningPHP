<?php

    print "Qual o primeiro produto? \n";
    $nome1 = fgets (STDIN);
    print "Qual o preço do/a $nome1? \n";
    $preco1 = fgets (STDIN);
    print "Qual o segundo produto? \n";
    $nome2 = fgets (STDIN);
    print "Qual o preço do/a $nome2? \n";
    $preco2 = fgets (STDIN);
    print "Qual o terceiro produto? \n";
    $nome3 = fgets (STDIN);
    print "Qual o preço do/a $nome3? \n";
    $preco3 = fgets (STDIN);

    if($preco1 < $preco2 and $preco1 < $preco3){
        print "Compre o/a: $nome1";
    }
    elseif($preco2 < $preco1 and $preco3){
        print "Compre o/a: $nome2";
    }
    else{
        print "Compre o/a: $nome3";
    }