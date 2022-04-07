<?php
//	if (recaptcha) {
		    $name = $_POST['fullName'];
		    $email = $_POST['email'];
		    $message = $_POST['message'];
		    
		    
		    $to = 'pilarroperez@hotmail.com'; 
		    $subject = 'Message from ACS contact ';
	    	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
		
		    mail ($to, $subject, $body);
		    header("Location: http://piropeweb.com/thanks.html"); /* Redirect browser */
		    exit();
//	}
?>