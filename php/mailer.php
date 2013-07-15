<?php
session_start();
require("../PHPMailer/class.phpmailer.php");

$mail = new PHPMailer();

$name=$_POST["name"];
$mobile=$_POST["phoneno"];
$email=$_POST["email"];
$message="Name\tQuantity\n";
foreach($_SESSION['basket'] as $k){
	if(isset($k['name'])){
		$message.= ($k['name']."\t".$k['count']."\n"); 
	}
	}

$to="deliversroorkee@gmail.com";
$subject="Order by".$name;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";


echo 'hello';

$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587; 
	$mail->Username = 'deliversroorkee@gmail.com';  
	$mail->Password = '';           
	$mail->SetFrom('deliversroorkee@gmail.com', $subject);
	$mail->Subject = "Order Description";
	$mail->Body = $message."\r\nCustomer Name: ".$name."\r\nMobile Number:".$mobile."\r\nEmail ID: ".$email;
	$mail->AddAddress('deliversroorkee@gmail.com');
echo 'here';
	if(!$mail->Send()) {
		//$error = 'Mail error: '.$mail->ErrorInfo; 
		//echo $error;
		header("Location: ../checkout.php?message=2");
		return false;
		
	} else {
		header("Location: ../checkout.php?message=1");
		return true;
		
	}



?>

