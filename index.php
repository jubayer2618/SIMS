<!DOCTYPE html>
<html>
<head>
	<title>Students Information Management System</title>
	<style>
		*{
			margin:0px;
			padding: 0px;
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
<body style="background-image: url(img/adminlogin.jpg)">
	<section class="nav">
		 <div class="navbar">
		 	
		 	<ul>
		 		<li><a href="index.php">Home</a></li>
		 		<li><a href="http://localhost/SIMS/adminlogin.php">Admin Panel</a></li>
        <li><a href="http://localhost/SIMS/studentlogin.php">Students Section</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="contact.php">Contact us</a></li>

		 	</ul>
		 </div>
	</section>
<br>
<br>
	<h1 style="text-align: center; margin-top: 30px;">Welcome To Daffodil International University.</h1><br><br><br>
<div><br><br>
  <h2 style="text-align: center; color: white;">Search Student's information</h2><br>
           <center>
                 <form action="index.php" method="post">
                <input style="height: 30px; width: 150px; background-color: #B2BABB;" type="text" name="id" placeholder="ID Number" style="width: 240px;height: 35px;">
                 <select style="height: 30px; width: 150px; background-color: #E67E22; font-weight: bold;" name="batch">
                                    <option>Select Batch</option>
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
                  <input style="height: 30px; width: 150px; background-color: #2ECC71; font-weight: bold;" type="submit" name="show" value="Show Student Info" style="margin-left: 30px;" >
                            </form>
                            </center>
            </div><br><br>

<center>
  <table style="background-color: #9B59B6;" border="2" >
    <tr >
        <th class="text-center">Name</th>
        <th class="text-center">ID</th>
        <th class="text-center">Dept.</th>
        <th class="text-center">Batch</th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact no.</th>
        <th class="text-center">Picture</th>
    </tr>

<?php 
    include('conn.php');
    
    if (isset($_POST['show'])) {

          $id = $_POST['id'];
        $batch = $_POST['batch'];
       
        $sql = "SELECT * FROM `tblstudent` WHERE `id` = $id OR `batch`= $batch ";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($Rows = mysqli_fetch_assoc($result)) {
                $name = $Rows['sname'];
                $id = $Rows['id'];
                $dept = $Rows['dept'];
                $batch = $Rows['batch'];
                $email = $Rows['email'];
                $contact = $Rows['contact'];
                $picture = $Rows['picture'];
                ?>
                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $id;?></td>
                    <td><?php echo $dept;?></td>
                    <td><?php echo $batch;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $contact;?></td>
                    <td><img src="upload/<?php echo $picture;?>" width=90px height=60px alt="img"></td>
                </tr>
                <?php
                
            }
            
        } else {
            echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>

</center>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>


