<?php

function poligono ($numero_lados,$medida_lados){
    if ($numero_lados == 3){
        $perimetro = $medida_lados*3;
        $resposta = "É um triângulo e o perímetro é ".$perimetro;
    }
    elseif ($numero_lados == 4){
        $area = $medida_lados * $medida_lados;
        $resposta = "É um quadrado e a área é ".$area;
    }
    else {
        $resposta = "É um pentágono";
    }
    return $resposta;
}

print "Digite o número de lados:";
$numero_lados = (float) fgets(STDIN);

print "Digite a medida dos lados em cm:";
$medida_lados = (float) fgets(STDIN);

$resposta = poligono ($numero_lados,$medida_lados);
print $resposta . "\n";

