<?php

function media ($nota1,$nota2){
    $media = ($nota1 + $nota2)/2;
    if ($media >= 6.0){
        $resposta = "O aluno foi aprovado com média".$media;
    }
    else {
        $resposta = "O aluno está reprovado com média".$media;
    }
    return $resposta;
}

print "Digite a primeira nota:";
$nota1 = (float) fgets(STDIN);

print "Digite a segunda nota:";
$nota2 = (float) fgets(STDIN);

$resposta = media ($nota1,$nota2);
print $resposta . "\n";