<?php
function estVide($nombre):bool{
    return  empty($nombre);
}
function nombre($nombre):bool{
    return is_numeric($nombre);
}

function nombreValide($nombre,string $key,array &$error):void{
    if(estVide($nombre)){
        $error[$key]="veuillez saisi une valeur"; 
    }else{
        if(!nombre($nombre)){
            $error[$key]="doner un nombre positif";
        }
    }
}
