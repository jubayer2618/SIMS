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
<body style="background-color: white; background-image: url(img/reg.jpg);">
		<section class="nav">
		 <div class="navbar">
		 	
		 	<ul>
		 		<li><a href="index.html">Home</a></li>
		 		<li><a href="viewstudents.php">View Students</a></li>
		 	</ul>
		 </div>
	</section>
     <?php
include("conn.php");
$name = $_GET['sname']
//$id = $_SET['sid']
//$sql = "SELECT * FROM `tblstudent` where sname = $name";
//$sql = "UPDATE tblstudent SET sname='$name' WHERE sid=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

$data = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($data);
?>
	<h1 class="hh">Update Students Form</h1><br>
	<div class="header1">
		

		<form action="update.php" method="POST" enctype="multipart/form-data">
	<b>Student Name:</b> <input style="width: 200px; height: 30px;" type="text" name="sname" placeholder="Enter Your Name" required="" value="<? php echo $row['sname'];?>"><br><br>
	<b>Student ID:</b> <input style="width: 200px; height: 30px;" type="text" name="id" placeholder="Enter Your Student ID" required=""><br><br>
	<b>Department:</b> <select style="width: 200px; height: 30px;" name="dept">
		<option>CSE</option>
		<option>EEE</option>
		<option>SWE</option>
		<option>BBA</option>
		<option>THM</option>
		<option>MCT</option>
		<option>CE</option>
		<option>ETE</option>
		<option>ICE</option>
	</select><br><br>
	<b>Batch:</b> <select style="width: 200px; height: 30px;" name="batch">
		<option>47</option>
		<option>48</option>
		<option>49</option>
		<option>50</option>
		<option>51</option>
		<option>52</option>
		<option>53</option>
		<option>54</option>
		<option>55</option>
		<option>56</option>
		<option>57</option>
		<option>58</option>
	</select><br><br>
	<b>E-mail:</b> <input style="width: 200px; height: 30px;" type="text" name="email" placeholder="Enter Your E-mail"><br><br>
	<b>Contact Number:</b> <input style="width: 200px; height: 30px;" type="text" name="contact" placeholder="Enter Your Contact Number"><br><br>
	<b>Picture:</b> <input type="file" name="picture"><br><br>
	<br>
	<input style="font-size: 20px; width: 100px; height: 30px;" type="submit" value="Submit">
</form>
	</div>

</body>
</html>