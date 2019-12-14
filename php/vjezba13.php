<?php

    $user = 1;
    $admin = 2;
    $superadmin = 4;


    $loguser = 2;

    $allowdusers = $admin | $superadmin;


    if(($loguser & $allowdusers) != 0){

            echo "this user is allowd";

    }else{

        echo"user is not alownd";

    }

    

?>