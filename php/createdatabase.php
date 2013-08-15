<?php
$dbc= mysqli_connect('localhost','root','welcome');
$query="CREATE DATABASE rd";
mysqli_query($dbc,$query);
mysqli_close($dbc);
$dbc= mysqli_connect('localhost','root','welcome','rd');
$sql = "CREATE TABLE roorkee_delivers(cust_id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(cust_id), name VARCHAR(15), mobile INT(10), email VARCHAR(30), order_info TEXT)";
mysqli_query($dbc,$sql);
echo 'Job Done';
mysqli_close($dbc);
?>

