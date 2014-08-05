<?php

	$destinationEmail = "npizar@gpmarketinginc.com";
	$fromEmail = $_POST["email"];
	$headers = 'From:' . $fromEmail;
	$subject = "A new spot has been requested."
	$formContents = "";
		$outputFile = "SpotBuilder_Output_" . date("m-d-Y_H-i-s") . "txt";
	
	foreach($array as $key => $value) {
	  $formContents .= $key . ": ". $value . "\n";
	}

	// Save a copy of the form data to a file just in case.
	file_put_contents ( $outputFile, $formContents );


	/* No need for this to be active while debugging

	try{
		if(!mail($destinationEmail, $subject, $formContents, $headers)){
			throw new Exception('Mail failed to send.');
		}else{
			echo 'Mail sent successfully.';
		}
	}catch(Exception $e){
		echo $e->getMessage() ."\n";
	}

	*/

	// Save form output to file for now.

	

?>