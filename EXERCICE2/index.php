<?php
include_once("fonctions.php");
define("VAL_MIN",5);
define("VAL_MAX",50);
define("V_MIN",60);
define("V_MAX",160);
$largeur=rand(VAL_MIN,VAL_MAX);
$long=rand(V_MIN,V_MAX);
echo " la largeur est : $largeur <br>";
echo "la longueur est : $long <br>";
calculDiensions($largeur,$long);
?>