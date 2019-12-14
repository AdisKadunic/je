<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

        #uloge u bazi
        $student = 1;
        $profesor = 2;
        $kordinator = 4;
        $podrska = 8;

        #korisnik
        $korisnik = 2;

        $allowduser = $kordinator | $podrska;

        if(($allowduser & $korisnik) !=0){
            ?>

                <div style="
                    backround-color: red;
                    color: white;
                ">
                <p>zona dostupna koridnatoru i podrsci</p>
                </div>

            <?php
        }


    ?>
                <div style="
                background-color: blue;
                ">
                <p>zona dostupna svima</p>
                </div>
            <?php
            if($korisnik & $student){
                echo "student";
            }else if($korisnik & $profesor){
                echo "profesor";
            }else if ($korisnik & $kordinator){
                echo "podrska";
            }else{
                echo "nepoznat korisnik";
            }


            ?>
</body>
</html>