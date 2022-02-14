<?php
function calculDiensions(float $long,float $larg):void{
    $peri=($long+$larg)*2;
    $surf=$long*$larg;
    $d=sqrt(pow($long,2) + pow($larg,2));
    $diag=round($d,2);
    echo "le perimetre est : $peri <br>";
    echo "la surface est : $surf <br>";
    echo "la diagonale : $diag <br>";
}