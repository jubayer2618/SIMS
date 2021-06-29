<!DOCTYPE html>
<html>
<head>
	<title>Students Information Management System</title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.header1{
			text-align: center;
		}
		.hh{
			margin-top: 50px;
			color: black;
			text-align: center;
		}
		.link{
                 text-decoration:none;
                 font-size: 20px;
                 background-color:white;
                 color: black;
		}
		b{
			color: black;
		}
        .one{
        	text-align: left;
        	margin-top: 20px;
        	background-color: white;
        	color: black;
        	text-decoration: none;
        	padding-left: 40px;
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
<body>
	<section class="nav">
     <div class="navbar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
      </ul>
     </div>
  </section>
<center>
	<h1 style="margin-top: 50px;">Client Info</h1><br><br>

<?php

include("conn.php");
$query = "SELECT * FROM `contact` ";
$data = mysqli_query($conn,$query);

?>
<table border="1">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Message</th>
		</tr>
<?php
while($row = mysqli_fetch_array($data))
{
	echo "
	<tr>
		<td>$row[name]</td>
		<td>$row[email]</td>
		<td>$row[message]</td>
	</tr>
	";
}
?>
</table>
</center>
</body>
</html>