<?php
function estVide($nbre):bool{
    return empty($nbre);
}
function estNombre($nbre):bool{
    return is_numeric($nbre); 
}
//fonction nombre valide
function validNombre($nbre,string $key, array &$error):void{
    if(estVide($nbre)){
       $error[$key]="veuillez saisi une valeur"; 
    }else{
        if(!estNombre($nbre)){
            $error[$key]="saisi un nombre";
        }  
    }
}
//annee bisxeltile
function bisextile( int $annee):bool{
    if(($annee % 400 == 0) || ($annee % 4 ==0 && $annee % 100 !=0)){
        return true;
    }      
}
//fonction nombre de jour du mois
function nombreJour(int $ann,int $mois):int{
    if($mois==2){
        if(bisextile($ann)){
            return 29;
        }else{
            return 28;
        }      
    }elseif($mois==4 or $mois==6 or $mois==9 or $mois==11){
        return 30;
    }else{
        return 31;
    } 
}

// function controlJour($jj):bool{
//     if($jj>0 or $jj<=31){
//         return true;
//     }else{
//         return false;
//     }
// }

// function controlMois($m):bool{
//     if($m>0 or $m<=12){
//         return true;
//     }else{
//         return false;
//     }
// }

// function controlAn($aa):bool{
//     if($aa>0){
//         return true;
//     }else{
//         return false;
//     }
// }
//fonction date valide
function dateValide( $an,$mois,$jours):bool{
    $joursN=nombreJour($an,$mois);
    if($jours<=$joursN and ($mois>=1 or $mois<=12) and $an>0){
        return true;
    }else{
        return false; 
    }
  }
//fonction date suivante
  function dateSuivante( $anS, $moisS, $joursS):void{
    if(dateValide($anS,$moisS,$joursS)){
        $jr=nombreJour($anS,$moisS);
         if($joursS<$jr){
            $joursS++;
            echo "la date suivante est $joursS/$moisS/$anS\n ";
         }else{
            $joursS=1;
                if($moisS==12){
                $moisS=1;
                $anS ++;
                }else{
                $moisS ++;
             }
             echo "la date suivante est $joursS/$moisS/$anS\n ";
         }
     }
  } 
//fonction date precedente
function datePrecedente($an,$mm,$jj)
{
    $n=nombreJour($an,$mm-1);

    if(dateValide($an,$mm,$jj))
    {
        if($jj!=1)
        {
            $jj--;
        
        }else{
            
            if($mm==1)
            {
                $mm=12;
                $jj=31;
                $an--;
            }else{
                $mm--;
                $jj=$n;
            }
    }
}
    echo "la date precedente est $jj/$mm/$an \n";
}
 ?>
 