<?php



$view_pass="views/users/";


return [
    "login" => [
        "uri" => "/doctor/login",
        "action" => $view_pass."register.php",
    ],
    "register" => [
        "uri" => "/doctor/register",
        "action" => $view_pass."login.php",
    ],
    "home" => [
        "uri" => "/doctor/",
        "action" => "views/"."home.php",
    ],
];

?>
