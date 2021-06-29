<?php session_start();

$_SESSION['id'] = $_POST['uid'];
include("conn.php");

$id = $_POST['uid'];
$pass = $_POST['pass'];
$query = "select * from tbluser where uid = $id";

$data = mysqli_query($conn,$query);
$row = mysqli_fetch_array($data);

if($data)
{   
	if($row['uid'] == $id && $row['password'] == $pass)
	{
	    header("Location: http://localhost/SIMS/viewstudents.php");
	}
	else
		header("Location: http://localhost/SIMS/adminlogin.php");
}
?>