<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1><?php

#ime restoranan

 $ime_restorana ="Mrvica";

echo $ime_restorana

?></h1>
<?php
#promjenjive
$adresa ="Paramlinska bb";
$radno_vrijeme = "otvoreno";
$vrojeme = "06:30-22:00";
$ocjena = "9.5";

echo "Trenutno:$radno_vrijeme";
echo "<br></br>";
echo "ocjena:$ocjena";


?>
<p>

broj restorana
    <a herf="tel:<?php echo $vrojeme;?>">
    <?php echo "$vrojeme"; ?>

</p>
    
</body>
</html>


