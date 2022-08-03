<?php
include ('connection.php');

$username=$_POST['user'];
$password=$_POST['pass'];

// Prevent the sql injection

$username=stripcslashes($username);
$password=stripcslashes($password);

$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);

// SQL run
$sql="select * from login where username='$username' and password='$password' LIMIT 1";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

$count=mysqli_num_rows($result);

if($count==1)
{
	header('location: index.php');
}
else {
	echo "<h2><center>Login failed</center></h2>";
}