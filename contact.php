<?php
require_once("/admin/phpscripts/init.php");
if(isset($_POST['name'])){
$name = $_POST['name'];
//echo "thanks, {$_POST['name']}";
$email = $_POST['email'];
//echo "thanks, {$_POST['email']}";
$company = $_POST['company'];
//echo "thanks, {$_POST['company']}";
$phone = $_POST['phone'];
//echo "thanks, {$_POST['phone']}";
$msg = $_POST['msg'];
//echo "thanks, {$_POST['msg']}";
$honeypot = $_POST['address'];
$direct = "thankyou.php";
if($honeyPot===""){
echo "Email Sent";
}
sendMessage($name, $email, $company, $phone, $msg, $direct); 
	 }else{
		 echo "Screw you BOT!";
		 //echo "don't be lazy fill out the form..";
	 }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />

<body>
<header id="navD" class="row">
<div class="show-for-large-only">
<img src="images/logoName.svg" class="small-2 large-2 columns" alt="logo">

<a class="small-2 large-2 columns" href="#" >Home</a>
<img src="images/logo.svg" class="small-2 large-2 columns" alt="logo">
  <a class="small-2 large-2 columns" href="#">Portfolio</a>

  <a class="small-2 large-2 columns" href="#">Blog</a>
   
  <a class="small-2 large-2 columns"  href="#">Contact</a>
</div>


</header>
<section id="nav" class="show-for-small-only"> 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="#">Protfolio</a>
  <a href="#">Blog</a>
  <a href="#">Contact</a>
</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>
</section>
<section  class="show-for-small-only">
<img src="images/logoName.svg" class="small-8  columns" alt="logo">


<img src="images/logo.svg" class="small-4 columns" alt="logo">
 


</section>

  <section class="row"> 
  <img class="small-12 large-12 columns" src="images/topnav.svg" alt=""/> 
  
  
  
  
  </section>




<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">

	<label>Name:</label>
	<input name="name" type="text">
	<label>Company:</label>
	<input name="company" type="text">
	<label class="hidden">Address:</label>
	<label>Email:</label>
	<input name="email" type="email">
	<label>Phone Number:</label>
	<input phone="phone" type="tel">
	<label>Message:</label>
	<textarea name="msg"></textarea>
	<input type="submit" value="send">
</form>	
</body>
 <script src="js/js.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
</html>
