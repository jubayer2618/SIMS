<?php session_start();
if (isset($_SESSION['id']) == Null) 
	header("Location: http://localhost/SIMS/adminlogin.php");

?>

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
		h1{
			margin-top: 50px;
		}
		.link{
                 text-decoration:none;
                 font-size: 20px;
                 background-color: #B03A2E;
                 color: black;
		}
		a{
			text-decoration: none;
		}
		h3 a{
			background-color: #E67E22;
			color: black;
		}
		h4 a{
			background-color: red;
			color: black;

		}
		h5 a{
			background-color: #41DC0F;
			color: black;

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
		table{
			border:1px solid black;
		}
	</style>
</head>
<body style="background-color: #D0D3D4; background-image: url(img/view.jpeg);">
<div class="header1">
	<section class="nav">
		 <div class="navbar">
		 	
		 	<ul>
		 		<li><a href="http://localhost/SIMS/viewstudents.php">Home</a></li>
		 		<li><a href="logout.php">Log out</a></li>
		 	</ul>
		 </div>
	</section>
	<h1>Students Database</h1><br>

<?php
include("conn.php");
$query = "SELECT * FROM `tblstudent` ";
$data = mysqli_query($conn,$query);
?>
<div style="margin-left: 190px;">
	<table border="1" width="1000px;">
<tr>
		<th>Name</th>
		<th>ID</th>
		<th>Department</th>
        <th>Batch</th>
		<th>Email</th>
		<th>Contact Number</th>
		<th>Picture</th>
		<th>Action</th>

</tr>
<?php
while($row = mysqli_fetch_array($data))
{
	echo "
	<tr>
		<td>$row[sname]</td>
		<td>$row[id]</td>
		<td>$row[dept]</td>
        <td>$row[batch]</td>
		<td>$row[email]</td>
		<td>$row[contact]</td>
		<td><img src = upload/$row[picture] width=80px height=50px><br>
         <h3><a href=download.php?sid=$row[id]>Download</a></h3>
		</td>
		<td>
			<h4><a href=delete.php?sid=$row[id]>Delete</a></h4><br>
			<h5><a href=update.php?sid=$row[id]>Edit/Update</a></h5>
		</td>
	</tr>
	";
	

}
?>
</table>
</div>

</div>
</body>
</html>