<?php

    function temperatura($far){
        $graus = ($far - 32) * 5/9;
        return $graus;
    }

    print "Digite uma temperatura em Fahrenheit:";
    $far= (float) fgets(STDIN);
    $graus= temperatura($far);
    print "A temperatura convertida em graus Celsius é ". $graus ."\n";