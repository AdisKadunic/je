<?php

#operatori
#operator dodjele =
#aritmeticki operator +, -,*,/,%
    #modul operator
    #echo 11 % 2;
#operatori poređenja <,>, <=,>=
    #operator jednako ==
    echo 10 == "10";  
    #operator identicno ===
    echo 10 === 10;   
    #operator nije jednako !=
    echo 10 != 5;
    #operatorr nije identicno !==
    echo 10 !== "10";
    #nadovezivanje stringova .
    echo "ovo" . "je" . "kompletan"."string";
    #unarni operatori +=,*=,-=,/=,%=
    $a = 15;
    $a = $a + 7;
    echo $a;
   #inkrem i dekrement
      $c = 10;
      echo $c++;
      echo ++$c;
      #logicki operator &&,|| i !
          $f = 10;
          $g = 5;
          $h = 0;
          echo "<br>";
          echo $f && $g;
?>