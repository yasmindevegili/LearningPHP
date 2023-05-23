<?php

$triangulo = "";
$quadrado = "";

function mostrar_quadrado($quadrado){
    $quadrado = array (
        "* * * * * * * *",
        "* * * * * * * *",
        "* * * * * * * *",
        "* * * * * * * *",
        "* * * * * * * *",
        "* * * * * * * *",
        "* * * * * * * *",
        "* * * * * * * *"
    );
    foreach ($quadrado as $key => $valor){
        print "$valor \n";
    }
}

function mostrar_retangulo_direita($triangulo){
    $triangulo = array (
        "* ",
        "* * ",
        "* * * ",
        "* * * * ",
        "* * * * * ",
        "* * * * * * ",
        "* * * * * * * ",
        "* * * * * * * *"
    );
    foreach ($triangulo as $key => $valor){
        print "$valor \n";
    }
}

function mostrar_retangulo_esquerda($triangulo){
    $triangulo = array (
        "              *",
        "            * *",
        "          * * *",
        "        * * * *",
        "      * * * * *",
        "    * * * * * *",
        "  * * * * * * *",
        "* * * * * * * *");
    foreach ($triangulo as $key => $valor){
        print "$valor \n";
    }
}

mostrar_quadrado($quadrado);
print "\n";
mostrar_retangulo_direita($triangulo);
print "\n";
mostrar_retangulo_esquerda($triangulo);
