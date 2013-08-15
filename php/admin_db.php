<?php
if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
	header('HTTP/1.1 401 Unauthorized');
	header('WWW-Authenticate: Basic realm="RoorkeeDelivers"');
	exit('<h3>Roorkee Delivers</h3> Sorry, You must enter your username and password to log in and access this page');
}

require_once('connectvars_000.php');
		$dbc= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);$user_username = mysqli_real_escape_string($dbc,trim($_SERVER['PHP_AUTH_USER']));
$user_password=mysqli_real_escape_string($dbc,trim($_SERVER['PHP_AUTH_PW']));
//echo $user_username;
//echo $user_password;
$query = "SELECT username FROM rd_admin WHERE username= '$user_username' AND password =SHA('$user_password')";

$data = mysqli_query($dbc,$query);
//$row =mysqli_fetch_assoc($data);
//echo 'hello';
//echo $row['username'];
//exit(0);
/*foreach($data as $i){
	echo $i;}
exit(0);*/
//if(mysqli_num_rows($data)==1){ echo "yes";} else {echo 'no';}
if($data){
?>	
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Orders</title>
<style>
table tr td{
	width:200px;
	border:1px solid #111;
}
.order_row{
	width:100px;
}
</style>
</head>
<body>
<table>
<tr>
<td>Name</td><td>Mobile</td><td>Email</td><td>Address</td><td>Order</td></tr>
<?php $query = "SELECT * FROM roorkee_delivers";
$data= mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($data)){
	echo '<tr><td>'.$row['name'].'</td><td>'.$row['mobile'].'</td><td>'.$row['email'].'</td><td>'.$row['address'].'</td><td class="order_row">'.$row['order_info'].'</td></tr>';
	}
	mysqli_close($dbc);
	?>
</table>
</body> <?php
} else {
	header('HTTP/1.1 401 Unauthorized');
	header('WWW-Authenticate: Basic realm="RoorkeeDelivers"');
	exit('<h3>Roorkee Delivers</h3> Sorry, You must enter your username and password to log in and access this page.</a>');
}
echo ('<p class="login">Your are logged in as '.$user_username.'.</p>');
?>