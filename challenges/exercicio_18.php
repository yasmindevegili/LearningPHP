<?php
    $contador=1;
    $impar=0;
    $par=0;
    while($contador<11){
        print "Digite um número: \n";
        $num= (int) fgets (STDIN);
        $contador=$contador +1;
        if($num%2<>0){
            $impar=$impar+1;
        }
        else{
            $par=$par+1;
        }
    }
    
    
    print "$par números pares e $impar números ímpares.";