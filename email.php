<?PHP

// Code to send an email to user with a simple command
function send_email( $to, $from_email, $from_name, $subject, $message, $cc, $bcc, $copy_to_self ){
	$header = array();
	
	$headers[] = "From: $from_name <$from_email>";
	
	// If we have a CC
	if( $cc != null){
		$headers[] = "Cc: $cc";
	}
	
	// If we have a BCC
	if( $bcc != null || $copy_to_self != null){
		$_temp = array();
		
		// Check if we're sending to ourself
		if( $copy_to_self == true ){
			$_temp[] = $copy_to_self;
			
		}
		
		// Check if we're sending to someone else
		if( $bcc != null ){
			$_temp[] = $bcc;
			
		}
		
		$headers[] = "Bcc: " . implode(",", $_temp) ;
	}
	
	$headers[] = "X-Mailer: PHP/" . phpversion();
	$headers[] = "MIME-Version: 1.0\r\n";
	$headers[] = "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$result = mail($to, $subject, $message, implode("\r\n", $headers));
	
	// Check if results
	if( !$result ) {   
		return "form-error";

	} else {
		return "form-success";

	}	
	
}

?>