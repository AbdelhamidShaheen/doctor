<?php

/**
 * search requested route
 */
$admin_pattern = "@^/doctor/admins/*@i";
$routes = preg_match($admin_pattern, $_SERVER['REQUEST_URI']) ? require_once "admins.php" : require_once "users.php";
foreach ($routes as $route) {
    if ($route["uri"] == $_SERVER["REQUEST_URI"]) {

        require_once $route["action"];
        return;
    }

}

/**
 * if routes is not found
 */
require_once "views/notfound.php";
