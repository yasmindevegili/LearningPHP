<?php
 
      print "Digite uma quantidade de dias: \n";
      $dias = (int) fgets (STDIN);
      print "Digite uma quantidade de horas: \n";
      $horas = (int) fgets (STDIN);
      print "Digite uma quantidade de minutos: \n";
      $minutos = (int) fgets (STDIN);
      print "Digite uma quantidade de segundos: \n";
      $segundos = (int) fgets (STDIN);

      $total_segundos = ($dias*24*60*60) + ($horas*60*60) + ($minutos*60) + $segundos;

      print "total em segundos: $total_segundos segundos";