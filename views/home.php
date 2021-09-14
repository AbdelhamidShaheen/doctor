<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>




<div class="container flex mt-3"> 
  <a href=<?php echo route("login")?> class="btn btn-primary">LOGIN</a>
  <a href=<?php echo route("register")?>   class="btn btn-primary ">REGISTER</a>
</div>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">DOCTOR</span>
                <div class="mb-4 lead">BOOKING DOCTOR QUICKLY.</div>
                <a href="/doctor/" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>