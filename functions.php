<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
		}else{
			echo "Redirect not sent.";	
		}
	}
	
	function sendMessage($name, $email, $company, $phone, $msg, $direct) {
		$to = "youremailaddressgoeshere@address.com";
		$subj = "Message from mysite.com";
		$extra = "Reply-To: {$email}";
		$body = "Name: {$name}\n\nEmail: {$email}\n\nMessage: {$msg}";
		//echo $body;
		//This will not work locally on your machine...
		//mail($to, $subj, $body, $extra);
		redirect_to($direct);
	}



?>