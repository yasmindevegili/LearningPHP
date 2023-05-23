<?php

    function polegadas ($pol){
        $cm = $pol * 2.54;
        return $cm;
    }

    print "Digite um número em polegadas:";
    $pol = (float) fgets(STDIN);

    $cm = polegadas ($pol);
    print "São ".$cm." centímetros" . "\n";