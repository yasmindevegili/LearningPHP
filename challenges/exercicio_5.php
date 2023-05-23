<?php

    print "Digite a primeira nota: \n";
    $nota1 = (float) fgets (STDIN);
    print "Digite a segunda nota: \n";
    $nota2 = (float) fgets (STDIN);
    
    $media = ($nota1+$nota2) /2;

    if($media == 10){
        print "Aprovado com distinção";
    }
    elseif($media >= 7 and $media <10){
        print "Aluno aprovado";
    }
    else{
        print "Aluno reprovado";
    }