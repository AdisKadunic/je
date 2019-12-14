<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .border{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <?php
        $price= mt_rand(10,100);
        $isnew = mt_rand(0,1)==1;
        $discount = 0.2;
        $class ="";
//nov
        if($isnew){
            $class = " class='border'";
        }
//sa ili bez popusta
        if($price > 50){
            $discount = $price * $discount;
            echo"<h1>the item is on discount</h1>";
                "<span{$class}" .
                " BAM" .
                "<del>(" .
                $price . 
                ")</span>" .
                "</h1>";
            
        }else{
            echo"<h1>the item is not for seal:";
            "<span {$class}" .
            $price;
            "BAM" .
            "</span>" .
            "</h1>";    }

    ?>
    
</body>
</html>