<?php

    function hip($catetoA,$catetoB){
        $hip = sqrt(($catetoA*$catetoA)+($catetoB*$catetoB));
        return $hip;
    }

    print "Digite o cateto A:";
    $catetoA= (float) fgets(STDIN);
    print "Digite o cateto B:";
    $catetoB= (float) fgets(STDIN);
    $hip= hip($catetoA,$catetoB);
    print "A hipotenusa é ". $hip . "\n";
    

