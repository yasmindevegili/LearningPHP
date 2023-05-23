<?php

    print "Digite um número menor que 1000 \n";
    $num = (int) fgets (STDIN);

    $unidade= $num%10;
    $num= ($num-$unidade)/10;
    $decimal= $num%10;
    $num= ($num-$decimal)/10;
    $centena= $num%10;

    print "$centena,'centena(s),',$decimal,'dezena(s) e',$unidade,'unidade(s)'";