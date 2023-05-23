<?php
$anterior=0;
$sucessor=1;
while($sucessor<=500){
$sucessor = $sucessor+$anterior;
$anterior = $sucessor-$anterior;
print "$sucessor \n";
}

