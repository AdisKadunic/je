<?php
require 'mode.php';

$class ="";
$user_status ="";
switch($statsus){
    case 1:
        $user_status = $class = "administrator";
        
    break;
    case 2:
        $class = $user_status = "coordinator";
    break;
    case 3;
            $class = $user_status = "user";
    break;
    default:
        $class = "unknown";
        $user_status = "unknown user";
    break;
}
$message= ($class !='unknown') ?'welcome' : 'warning';

$user_status = "<span class='{$class}'> {$message} {$user_status} </span>";

?>