<?php

$view_pass = "views/admins/";
return [
    "login" => [
        "uri" => "/doctor/admins/login",
        "action" => $view_pass . "login.php",
    ],
    "dashboard" => [
        "uri" => "/doctor/",
        "action" => $view_pass . "dashboard.php",
    ],
];
