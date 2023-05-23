<?php

    print "Digite uma letra: \n";
    $letra= fgetc (STDIN);
    
        if($letra =="a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u") {
            print "É uma vogal";
        }
        else{
            print "É uma consoante";
        }