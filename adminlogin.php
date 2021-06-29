<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Students Information Management System</title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.admin{
			margin: 0px auto;
			margin-top: 70px;
      padding: 20px;
			height: 435px;
			width: 400px;
			background-color: white;
			
		}
        .user{
        	height: 40px;
        	width: 250px;
        	border-radius: 500px;
        }
        .login{
        	height: 40px;
        	width: 90px;
        	border-radius: 500px;
        	font-weight: 800;
        	background-color: powderblue;
        }
        .frm{
        	text-align: center;
        }
        p{
        	color: red;
        	text-align: center;
        }
          .nav{
        	background-color: #3498DB;
        	height: 50px;
        }
        .nav .navbar{
        	margin: 0px auto;
        	width: 1100px;
        }
        .nav .navbar ul{
          list-style-type: none;
        }
        .nav .navbar ul li{
          float: left;
        }
        .nav .navbar ul li a{
          text-decoration: none;
          color: black;
          background-color: #3498DB;  
          font-size: 20px; 
          line-height: 50px;
          padding: 14px;
          transition: all linear .5s;
           }
           .nav .navbar ul li a:hover{
          color: black;
          background-color: white;  
          font-weight: 800;
           }
          .nav .navbar ul li ul li{
          	float: none;
          	display: none;
          }
          .nav .navbar ul li:hover ul li{
          	display: block;
          }
          
	</style>
</head>
<body style="background-color: #58D68D; background-image: url(img/pic1.png);">
	<section class="nav">
     <section class="nav">
     <div class="navbar">
      
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="http://localhost/SIMS/adminlogin.php">Admin Panel</a></li>
        <li><a href="http://localhost/SIMS/studentlogin.php">Students Section</a></li>
      </ul>
     </div>
 </section>

<div class="admin">
	<form class="frm" action="login.php" method="POST">
		<img src="img/pic2.png" height="150" width="150">
		<h1 style="margin-top: 50px;">Admin Login Area</h1><br>
		<b>User ID:    </b><input class="user" type="text" name="uid" placeholder="Enter Your Username" required="" ><br><br>
		<b>Password:     </b><input class="user" type="Password" name="pass" placeholder="Enter Your Password" required="" ><br><br>
		<input class="login" type="submit" name="login" value="Log in">
	</form>
	<br>
  
<!-- The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
This function returns true if the variable exists and is not NULL, otherwise it returns false. -->

<?php if(isset($_SESSION['id'])) 

    echo "<p>Incorrect user id or password.</p>";

    session_destroy();

?>

</div>

</body>
</html>
