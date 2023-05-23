<?php
    print "Qual o tamanho, em metros quadrados, da área a ser pintada?";
    $area_sera_pintada = (int) fgets (STDIN);

    $litros = ($area_sera_pintada*(1/6));
    print "Serão necessários $litros litros \n";

    #tabela de opcoes
    print "1. Comprar apenas latas de 18 litros \n";
    print "2. Comprar apenas galões de 3,6 litos \n";
    print "3. Misturar latas e galões \n";
    print "Escolha um tipo de compra:";
    $escolha = (int) fgets (STDIN);

    if ($escolha == 1) {
        $latas = ceil($litros/18);
        $preco = round($latas*80);
      
      print "São $latas latas de 18 litros e R$$preco \n";
    }

    elseif ($escolha == 2) {
        $latas = ceil($litros/3.6);
        $preco = round($latas*25);
      print "São $latas latas de 3,6 litros e R$$preco \n";
    }

    elseif ($escolha == 3) {
        $latas = round($litros/18);
        $galoes = ceil($litros%3.6);
        $preco = ($latas*80 + $galoes*25);
        
        print "São $latas latas de 18 litros, $galoes galões de 3,6 litros e R$$preco reais \n";
    }
