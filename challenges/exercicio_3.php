<?php

    print "Digite uma letra: \n";
    $letra = fgetc (STDIN);

    if ($letra == 'f' or $letra == 'F') {
        print "F - Feminino. \n";
       }
        elseif($letra == 'm' or $letra == 'M') {
        print "M - Masculino. \n";
       }
       else {
        print "Sexo inválido. \n";
       }