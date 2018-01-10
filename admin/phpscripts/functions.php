<?php
function redirect_to($location){
	if($location != NULL){
		
	
	header("Location: {$location}");
	}else{
		echo "Redirect not sent.";
	}
}
 function sendMessage($name, $email, $company, $phone, $msg, $direct){
	
	 $to = "abdullah-abdulazeez@hotmail.com";
	 $subj = "Portfolio Site";
	 $extra = "Reply-To: {$email}";
	 $body = "Name: {$name}\n\nEmail: {$email}\n\nMeassage: {$msg}";
	 //echo $body;
	 //Thiswill not work locally on your machine...
	 
	 //mail($to, $subj, $body, $extra);
	 redirect_to($direct);
 }


?>