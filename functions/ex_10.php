<?php

    function maior ($num1,$num2){
        if ($num1>$num2){
            $resposta= "O primeiro número digitado, ".$num1.", é maior"; 
        }
        elseif ($num1<$num2){
            $resposta= "O segundo número digitado, ".$num2.", é maior";
        }
        else{
            $resposta= "Os valores são iguais";
        }
        return $resposta;
    }

    print "Digite o primeiro número:";
    $num1= (float) fgets(STDIN);

    print "Digite o segundo número:";
    $num2= (float) fgets(STDIN);

    $resposta= maior ($num1,$num2);
    print $resposta . "\n";
