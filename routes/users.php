<?php

switch ($_SERVER['REQUEST_URI']) {
    case "/doctor/":
        require_once "./views/home.php";
        break;
    case "/doctor/signin":
        require_once "./views/users/signin.php";
        break;

    case "/doctor/signup":
        require_once "./views/users/signup.php";
        break;
    default:
        http_response_code(404);
        require_once "./views/notfound.php";
        exit();
}
