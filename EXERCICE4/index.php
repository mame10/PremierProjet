<?php
include_once("fonctions.php");
define("MIN",60);
define("MAX",200);
$nbre1=rand(MIN,MAX);
$nbre2=rand(MIN,MAX);
echo "le premier nombre est $nbre1 <br>";
echo "le second nombre est $nbre2 <br>";
permutation($nbre1,$nbre2);
echo "le premier nombre apres permutation est $nbre1 <br>";
echo "le second nombre apres permutation est $nbre2 <br>";
?>