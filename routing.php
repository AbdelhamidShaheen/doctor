<?php


switch($_SERVER['REQUEST_URI']){

    case "/doctor/log" :
        require "log.php";
    break;

    default:require "notfound.php";

}

