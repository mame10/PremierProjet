<?php
include_once("fonctions.php");
define("VAL_MIN",10);
define("VAL_MAX",80);
$x1=rand(VAL_MIN,VAL_MAX);
$x2=rand(VAL_MIN,VAL_MAX);
$y1=rand(VAL_MIN,VAL_MAX);
$y2=rand(VAL_MIN,VAL_MAX);
distance($x1,$x2,$y1,$y2);
?>