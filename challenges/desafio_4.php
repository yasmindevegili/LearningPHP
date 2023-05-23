<?php
    
     print "Digite o preço da mercadoria: \n";
     $mercadoria = (float) fgets (STDIN);
     print "Digite a porcentagem de desconto: \n";
     $porcentagem = (float) fgets (STDIN);

     $desconto = ($mercadoria*$porcentagem)/100;
     $pagar = $mercadoria-$desconto;

     print "O valor a ser pago é: $pagar reais \n" ;