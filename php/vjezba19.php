<?php

$startvalue =10;
$endvalue =120;
$trip =150;

$complit = $endvalue -$startvalue;

if($trip > $complit){
    $tripvalue = $trip -$complit;
    echo "you passd" .$tripvalue . "more thet neadeed";
}else if($trip < $complit{
    $tripvalue = $complit - $trip;
    echo "you nead" .$tripvalue . "more thet neadeed";
}

?>