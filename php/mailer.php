<?php	
session_start();
require_once('connectvars_000.php');
		$dbc= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$name=mysqli_real_escape_string($dbc,$_POST["name"]);
$mobile=mysqli_real_escape_string($dbc,$_POST["phoneno"]);
$email=mysqli_real_escape_string($dbc,$_POST["email"]);
$address= mysqli_real_escape_string($dbc,$_POST['address']);
$message='';
foreach($_SESSION['basket'] as $k){
	if(isset($k['name'])){
		$message.= ($k['name']."&nbsp;&nbsp;&nbsp;".$k['count']."<br/>"); 
	}
	}

/*require("../phpmailer/class.phpmailer.php");

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

$to="apsdehal@gmail.com";
$subject="Order by".$name;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";



$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587; 
	$mail->Username = 'roorkee.delivers@gmail.com';  
	$mail->Password = 'rdel!vers';           
	$mail->SetFrom('roorkee.delivers@gmail.com', $subject);
	$mail->Subject = "Order Description";
	$mail->Body = $message."\r\nCustomer Name: ".$name."\r\nMobile Number:".$mobile."\r\nEmail ID: ".$email;
	$mail->AddAddress('roorkee.delivers@gmail.com');
echo 'here';
	if($mail->Send()) {
		//$error = 'Mail error: '.$mail->ErrorInfo; 
		//echo $error;
		header("Location: ../checkout.php?message=2");


		
	} else*/ {
		
$query ="INSERT INTO roorkee_delivers (name,mobile,email,address,order_info) VALUES ('$name','$mobile','$email','$address','$message')";
mysqli_query($dbc,$query);
mysqli_close($dbc);
		header("Location: ../checkout.php?message=1");
		}
		
?>	