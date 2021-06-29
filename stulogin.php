<?php
include("conn.php");

if (isset($_POST['username'])) {

	$uname = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from stulogin where user = '".$uname."' AND pass = '".$password."' limit 1";

	$result = mysqli_query($sql);

	if($result['username'] == $uname && $result['password'] == $password)
	{
	    header("Location: http://localhost/SIMS/form.php");
	}
	else
		header("Location: http://localhost/SIMS/studentlogin.php");
    }
	
     

?>

