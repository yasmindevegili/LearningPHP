<?php

print "quantos kilometros foram percorridos com o carro?";
$kilometros = (int) fgets (STDIN);

print "quantos dias o carro foi alugado?";
$dias = (int) fgets (STDIN);

$preço_1 = $kilometros*0.15;
$preço_2 = $dias*60.00;

$valor_total = $preço_1 + $preço_2;

print "Você vai pagar: $valor_total reais";

