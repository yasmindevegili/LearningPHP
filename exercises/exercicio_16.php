<?php

    print "Digite um número: ";
    $num1 = (int) fgets (STDIN);
    print "Digite outro número: ";
    $num2 = (int) fgets (STDIN);
    print "Digite outro número: ";
    $num3 = (int) fgets (STDIN);
    print "Digite outro número: ";
    $num4 = (int) fgets (STDIN);
    print "Digite outro número: ";
    $num5 = (int) fgets (STDIN);

    $soma=$num1+$num2+$num3+$num4+$num5;
    $media=$soma/5;
    print "A soma foi $soma, e a média foi $media.";