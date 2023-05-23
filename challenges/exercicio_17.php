<?php

    print "Digite a base: \n";
    $base = (int) fgets (STDIN);
    print "Digite a potência: \n";
    $exp = (int) fgets (STDIN);

    $conta = pow($base,$exp);
    print "O resultado foi $conta. \n";