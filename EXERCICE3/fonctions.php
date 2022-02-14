<?php
function nombres( int $a,$b):void{
    $som=($a + $b);
    $expon=pow($a,$b);
    if($a>$b){
        $dif=$a - $b;
    }else{
        $dif=$b - $a;
    }
    $prod=$a*$b;
    $modulo=$a % $b;
    $division=$a/$b;
    $ca=pow($a,2);
    $cb=pow($b,2);
    echo "la somme :$som <br>";
    echo " exponentielle de $a sur $b :$expon <br>";
    echo "la difference est  :$dif <br>";
    echo "le produit de $a et $b est :$prod <br>";
    echo "$a modulo $b est :$modulo <br>";
    echo "la division de $a par $b est :$division <br>";
    echo "le carre de $a :$ca <br>";
    echo "le carre de $b :$cb <br>";
}
?>