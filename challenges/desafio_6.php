<?php
     print "Escreva uma temperatura em C°: \n";
     $valor_temperatura = (float) fgets (STDIN);

     $convertido = (9*$valor_temperatura)/5 + 32;
      
    print "A temperatura convertida de Celcius para Fahrenheit é: $convertido \n";