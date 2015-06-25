<?php

$username = $_POST["username"];
$password = $_POST["password"];

if (!get_magic_quotes_gpc())
  {
    $username = addslashes($username);
    $password = addslashes($password);
  }

$link = mysqli_connect("localhost", "user", "password", "bookstore");

if (mysqli_connect_errno()) 
{
 echo 'Error: Could not connect to database.  Please try again later.';
 exit;
}

$query = "select * from users where username = '".$username."' and password = '".$password."'";

$result = mysqli_query($link, $query);
$number = mysqli_num_rows($result);

if ($number == 1){
	$r = mysqli_fetch_array($result);

	session_start();
	$_SESSION['username'] = $r['username'];


	header("location: index.php");
}
else{
	header("location:signin.php?id=invalid");
}

mysqli_close($link);

?>