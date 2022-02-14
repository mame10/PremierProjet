<?php
function distance(int $x2,int $x1,int $y2,int $y1):void{
    $distance=round(sqrt(pow(($x2 - $x1),2) + pow(($y2 -$y1),2)),2)
    ;
    echo "la distance est $distance";
}
