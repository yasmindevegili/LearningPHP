<?php

    print "Quantos cigarros você fuma por dia? \n";
    $cigarros_dia = (int) fgets (STDIN);

    print "A quantos anos você fuma? \n";
    $anos = (int) fgets (STDIN);


    $total_cigarros = ($anos*365)*$cigarros_dia;
    $dias_perdidos = ($total_cigarros*10)/24;
    print "Foram $dias_perdidos dias perdidos \n"; 