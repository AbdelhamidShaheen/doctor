<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
	margin-top: 10%;
}


#form-container {
	margin-left: 28%;
	width: 600px;
	height: 300px;
	background-color: none;
	border: 1px #ff5722 solid;
}
#titile {
	margin-left: 28%;
	width: 602px;
	height: 30px;
	background-color: #ff5722;
}

input[type="text"], input[type="password"] {
	width: 250px;
	height: 30px;
	margin-top: 10px;
	margin-left: 3.50%;

}

input[type="submit"] {
	width: 500px;
	height: 30px;
	background-color: #ff5722;
	color: white;
	border: none;
	margin-top: 10px;
	margin-left: 50px;
	cursor: pointer;

}

input[type="submit"]:hover {
	background-color: #ff6d3f;
}

fieldset {
	width: 600px;
	margin-left: 28%;
	height: 200px;
	margin-top: 15%;
}

h4 {
	color: white;
	text-align: center;
}

#show-password {
	margin-left: 150px;
	font-family: sans-serif;
}

span {
	color: white;
	background-color: #f34747c7;
	border-bottom: 3px solid red;
}

input[type="checkbox"]{
	cursor: pointer;
}

#password-message {
	margin-left: 28%;
	width: 600px;
	height: 200px;
	background-color: solid;
	border: 1px #ff5722 solid;
	display: none;
	margin-top: 1px;

}

.invalid {
	color: red;
}

.invalid:before {
	position: relative;
	left: -35px;
	content: "✖";
}


.valid {
	color: green;
}

.valid:before {
	position: relative;
	left: -35px;
	content: "✔";
}

h4 {
	text-align: center;
}

p {
	margin-left: 50px;
}

label {
	color: gray;
	font-style: bold;
}

#signup {
	font-family: sans-serif;
}

a {
	text-decoration-style: double;
	text-decoration-line: unset;
	text-rendering: auto;
}

input[type="checkbox"] {
    margin-left: 7px;
}




</style>
</head>

<div id="titile">
	<h4><strong>SIGN up HERE</strong></h4>
	
</div>
 <div id="form-container" action="#" method="post" onsubmit="return validation();">
 	<form>
 		<div>
 			<input type="text" id="firstname" name="firstname" placeholder="First Name" autocomplete="off"/>
 			<input type="text" id="lastname" name="lastname" placeholder="Last Name" autocomplete="off"/>
 		</div>

 		<div>
 			<input type="text" id="email" name="email" placeholder="Email example@vybzgh.com" autocomplete="off"/>
 			<span id="erro"></span>
 		</div>


        <div>
 			<input type="password" id="password" name="password" placeholder="Password" autocomplete="off"/>
 			<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" autocomplete="off"/>
 		</div>

 		<div id="show-password"><label>Show password</label><input type="checkbox" name="checkbox" onclick="show()" /></div>
        <p id="signup">By clicking on <strong>Signup</strong> you agree to our<a href="#"> <strong>Terms and Conditions</strong></a></p>
 		<div>
 			<p><strong>Yes,I Agree</strong><label class="checkbox"><input type="checkbox" name="checkbox"></label></p>
 			<input type="submit" name="submit" id="submit" value="Signup"/>
 			
 		</div>
 	</form>
 </div>
 <div id="password-message">
 	<h4>Please password must contain the following</h4>
 	<p id="uppercase" class="invalid"><b>A lowercase letter</b></p>
 	<p id="lowercase" class="invalid"><b>A uppercase letter</b></p>
 	<p id="digit" class="invalid"><b>A number</b></p>
 	<p id="lengths" class="invalid"><b>Length must be between 8 to 20</b></p>
 	
 </div>
 <script>


	function show(){

var password = document.getElementById("password");
var confirmpassword = document.getElementById("confirmpassword");

if(password.type === "password"){
    password.type = "text";
}else{
    password.type = "password";
}

if(confirmpassword.type === "password"){
    confirmpassword.type = "text";
}else{
    confirmpassword.type = "password";
}


}


var password = document.getElementById("password");

password.onfocus = function() {
document.getElementById("password-message").style.display = "block";
}

password.onblur = function() {
document.getElementById("password-message").style.display = "none";
}

password.onkeyup = function(){

var uppercases = /[a-z]/g;
if (password.value.match(uppercases)){
uppercase.classList.remove("invalid");
uppercase.classList.add("valid");
}else{
uppercase.classList.remove("valid");
uppercase.classList.add("invalid");
}

var lowercases = /[A-Z]/g;
if (password.value.match(lowercases)){
lowercase.classList.remove("invalid");
lowercase.classList.add("valid");
}else{
lowercase.classList.remove("valid");
lowercase.classList.add("invalid");
}


var numbers = /[0-9]/g;
if (password.value.match(numbers)){
digit.classList.remove("invalid");
digit.classList.add("valid");
}else{
digit.classList.remove("valid");
digit.classList.add("invalid");
}

if((password.value.length >= 8) && (password.value.length <= 20)) {
    lengths.classList.remove("invalid");
    lengths.classList.add("valid");
}else{
    lengths.classList.remove("valid");
    lengths.classList.add("invalid");
}
}



function validation(){


var firstname = document.getElementById("firstname").value;
var lastname = document.getElementById("lastname").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var confirmpassword = document.getElementById("confirmpassword").value;
var atpos = email.indexOf("@");
var dotpos = email.lastIndexOf(".");






if(firstname === "" || lastname === ""){
    document.getElementById("erro").innerHTML = "**Please fill in both first and last name**";
    return false;
}

if(!isNaN(firstname) || !isNaN(firstname)){
    document.getElementById("erro").innerHTML = "**Name cannot be only numbers or digits**";
    return false;
}

if(firstname.length<3 || lastname.length<3 || firstname.length>15 || lastname.length>15 ){
    document.getElementById("erro").innerHTML = "**name must be between 3-15 characters**";
    return false;
}


if(email === ""){
    document.getElementById("erro").innerHTML = "**Please fill in email**";
    return false;
}

if(email.length<8 || email.length>30){
    document.getElementById("erro").innerHTML = "**Email must be between 8 to 30 characters**";
    return false;
}

if(atpos<1 || dotpos<atpos+2 || dotpos+2>=length.email){
    document.getElementById("erro").innerHTML = "**Email erro: fill in email in proper format**";
    return false;
}


if(password === "" || confirmpassword === ""){
    document.getElementById("erro").innerHTML = "**Please fill in both password**";
    return false;
}

if(password != confirmpassword){
    document.getElementById("erro").innerHTML = "**Both password have to much**";
    return false;
}

var incorrect = /[a-zA-Z][0-9]/g;
if(password.match(incorrect)){
    return true;
}else{
    document.getElementById("erro").innerHTML = "**incorrect password**";
    return false;
}



}


var confirmpassword = document.getElementById("confirmpassword");

confirmpassword.onfocus = function() {
document.getElementById("password-message").style.display = "block";
}

confirmpassword.onblur = function() {
document.getElementById("password-message").style.display = "none";
}

confirmpassword.onkeyup = function(){

var uppercases = /[a-z]/g;
if (confirmpassword.value.match(uppercases)){
uppercase.classList.remove("invalid");
uppercase.classList.add("valid");
}else{
uppercase.classList.remove("valid");
uppercase.classList.add("invalid");
}

var lowercases = /[A-Z]/g;
if (confirmpassword.value.match(lowercases)){
lowercase.classList.remove("invalid");
lowercase.classList.add("valid");
}else{
lowercase.classList.remove("valid");
lowercase.classList.add("invalid");
}


var numbers = /[0-9]/g;
if (confirmpassword.value.match(numbers)){
digit.classList.remove("invalid");
digit.classList.add("valid");
}else{
digit.classList.remove("valid");
digit.classList.add("invalid");
}

if((confirmpassword.value.length >= 8) && (confirmpassword.value.length <= 20)) {
    lengths.classList.remove("invalid");
    lengths.classList.add("valid");
}else{
    lengths.classList.remove("valid");
    lengths.classList.add("invalid");
}
}




 </script>
 </body>
</html>









