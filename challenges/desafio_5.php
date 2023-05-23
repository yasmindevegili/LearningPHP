<?php

print "digite a distancia a percorrer:";
$distancia = (int) fgets (STDIN);

print "digite a velocidade media esperada:";
$vm = (int) fgets (STDIN);

$tempo = $vm / $distancia;

print "o tempo em horas foi: $tempo"; 







