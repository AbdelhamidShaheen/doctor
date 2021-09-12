<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_REQUEST["user_name"]) || empty($_REQUEST["password"])){
?>

<div class="alert alert-danger alert-dismissible fade show mt-5">
    User name is require3d
</div>

<?php
$_REQUEST["user_name"];
}

}
?>


<form action="/doctor/log" method="post">
  <div class="form-group mt-5">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="user_name" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd">
  </div>
  <div class="form-group form-check">
  
  </div>
  <button type="submit" class="btn btn-primary">log in</button>
</form>
</div>



</body>
</html>