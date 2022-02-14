<?php
include_once("fonctions.php");
define("MIN",2);
define("MAX",20);
$a=rand(MIN,MAX);
$b=rand(MIN,MAX);
echo "le premier nombre est $a <br>";
echo "le second nombre est $b <br>";
nombres($a,$b);
?>