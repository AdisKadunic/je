<?php

    $trenutnagodina = date("Y");
    $goninarodenjaje = 1985;

    $brojgodine = $trenutnagodina - $goninarodenjaje;
    echo "Korisnik ima"." ". $brojgodine . "broj godina!";


echo "<br><br>";
$varijabla = "25";

#dvostruki interpoliraju varijable jednostruki ne

echo "ja imam" . $varijabla . "godina";
echo `ja imam" . $varijabla . "godnia`;

echo "ja imam $varijabla godina";
echo `ja imam $varijabla godina`;

echo "ja imam [$varijabla] godina";
echo `ja imam [$varijabla] godina`;

echo "ja imam {$varijabla} godina";
echo `ja imam {$varijabla} godina`;


?>