<?php
function nombreValide($number,string $key,array &$error):void{
    if(empty($number)){
        $error[$key]="veuillez saisi une valeur"; 
    }else{
        if(!is_int($number) && ($number<10000)){
            $error[$key]="doner un nombre positif superieur a 10000";
        }
    }
}
$tabpremier=[];
function premier($nbre){
    for($i=2;$i<=$nbre;$i++){
        $nd=0;
        for($j=1;$j<=$i;$j++){
            if($i % $j == 0){
                $nd++;
            }
        }
        if($nd == 2){
          $tabpremier[$j] = $i;
        }
    }
}

function affichTab( array &$tab){
    
}


