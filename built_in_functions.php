<?php


/**
 * @param String name name of route
 * @return String uri of route
 */
function route(String $name)
{
   
   $user_routes= require "routes/users.php";
   $admin_routes= require "routes/admins.php";
  
   if( key_exists($name,$user_routes)){

    $routes= $user_routes;
  
   }elseif( key_exists($name,$admin_routes)){
    $routes= $admin_routes;
  
   }else {
    
    throw new \Exception("nn known route name");
    
   }

   
   foreach($routes as $key=>$route){
    if($name==$key){
        return $route["uri"];
    }
}
   
}
