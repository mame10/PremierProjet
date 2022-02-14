<?php
include_once("fonctions.php");
 define("VAL_MIN",1);
 define("VAL_MAX",100);
 $cote=rand(VAL_MIN,VAL_MAX);
 echo "le cote est $cote <br>";
 calcul($cote);