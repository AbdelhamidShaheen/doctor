<?php

$admin_pattern="@^doctor/admins/*@i";
if (preg_match($admin_pattern, $_SERVER['REQUEST_URI'])) {

    require_once "admins.php";

} else {

    require_once "users.php";

}
