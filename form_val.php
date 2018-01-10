
<?php
 require_once("admin/phpscripts/init.php");
 $errors = array();

	if(isset($_POST['submit'])) {
		echo "Thanks for your feedback";
		$name = trim($_POST['name']);
		$phone = trim($_POST['phone']);
		$address = trim($_POST['address']);
		
		$required = array("name", "phone", "address");
		foreach($required as $require){
			$value = trim($_POST[$require]);
			if(!has_value($value)){
				$errors[$require] = $require." cannot be blank";
				
			}
			
		}
	}

   
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create an account</title>
</head>

<body>

     <?php
	// $no_attack ="&'\"!";
	 //echo htmlspecialchars($no_attack, ENT_QUOTES);
	echo form_errors($errors);
	
	?>
	
	<h1>Create an account</h1>
	<?php if(!empty($errors)){
		//echo "Errors array has fired";
}?>
	
	    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		<label>Name:</label>
		<input name="name" type="text" value="<?php if(!empty($name)){echo $name;} ?>"><br>
		
		
		<label>Phone:</label>
		<input name="phone" type="text" value="<?php if(!empty($name)){echo $phone;} ?>"><br>
		
		<label>Address:</label>
		<input name="address" type="text" value="<?php if(!empty($name)){echo $address;} ?>">
		
		<input name="submit" type="submit" value="Create an account">
	
	</form>


</body>
</html>