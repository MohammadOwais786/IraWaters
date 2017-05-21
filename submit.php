<?php
require 'global_vars.php';
	$con = connect_2_db();
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mailid = $_POST['email'];
	$message = $_POST['message'];
	// require './phpmailer/PHPMailerAutoload.php';
	// 		$mail=new PHPMailer;

	// 		$mail->isSMTP();
	// 		$mail->Host = 'smtp.gmail.com';
	// 		$mail->Port = 25;
	// 		$mail->SMTPSecure = 'tls';
	// 		$mail->SMTPAuth = true;
	// 		$mail->Username = "f2014942@hyderabad.bits-pilani.ac.in";
	// 		$mail->Password = "117358";
	// 		$mail->setFrom('f2014942@hyderabad.bits-pilani.ac.in','Ira Water');
	// 		$mail->addAddress($mailid,'Visitor'); //This sends a mail to the faculty
	// 		$mail->Subject ='Message';
	// 		$mail->Body=$message;
	// 		if(!$mail->send())
	// 		{
				
	// 			$status="NO";
	// 		}
	// 		else
	// 			$status="YES";
	$status="YES";
			if($status == "YES")
	{
mysqli_query($con, "INSERT INTO message (name, email, message) VALUES('$name', '$mailid', '$message')");
      echo '<script>
    alert("Uploaded successfully");
    window.location = "index.html"
    </script>';
	}
	else
	{
      echo '<script>
    alert("Error occurred while sending message. Please try after some time.");
    window.location = "index.html"
    </script>';
	}
}

?>