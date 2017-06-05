<?php
require 'global_vars.php';
	$con = connect_2_db();
if(isset($_POST['submit']))
{
	$package = $_POST['package'];
	$type = $_POST['type'];
	$name = $_POST['name'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$mailid = $_POST['email'];
	$phone = $_POST['phone'];
	$group1 = $_POST['group1'];
	$message = "Book Water Sample Testing";
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
mysqli_query($con, "INSERT INTO bookings (package, type, name, company, address, pincode, email, phone, group1) VALUES('$package', '$type', '$name', '$company', '$address', '$pincode', '$mailid', '$phone', '$group1')");
      echo '<script>
    alert("Booked successfully");
    window.location = "Water-Sample-Testing.html"
    </script>';
	}
	else
	{
      echo '<script>
    alert("Error occurred while sending message. Please try after some time.");
    window.location = "Water-Sample-Testing.html"
    </script>';
	}
}

?>