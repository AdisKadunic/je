<?php

    $broj = 749;
    $string = (string)$broj;

    $broj1 = 137;
    $broj2 = "294";

    echo (int)$broj1 + (int)$broj2;

    $broj2 = (int)$broj2;

    echo gettype($broj2);

    $vrijednost = (boolean)"1347";
    if(gettype($vrijednost) == "string"){
        echo "nasa vrijednost jednaka string";

    }else if(gettype($vrijednost) == "integer"){
        echo "nasa vrijednos je integer";
    }else{
        echo "nasa vrijednost nije validna";
    }

?>