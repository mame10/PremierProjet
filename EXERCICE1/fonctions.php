<?php
function calcul( int $nbre):void{
    $peri=$nbre*4;
    $surf=$nbre*$nbre;
    $d=sqrt(2*pow($nbre,2));
    $diag=round($d,2);
    echo "le perimetre est: $peri <br>";
    echo "la surface est : $surf <br>";
    echo "la diagonale est : $diag <br>";
 }

 ?>