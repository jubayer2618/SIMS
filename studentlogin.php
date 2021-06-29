<?php session_start(); ?>


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
          background-color: gray;
          height: 51px;
        }
        .nav .navbar{
          background-color: lightblue;
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
          background-color: gray;  
          font-size: 20px; 
          line-height: 50px;
          padding: 15px;
          font-weight: 800;
           }
           .nav .navbar ul li a:hover{
          color: black;
          background-color: white;  
           }
           .int{
            width: 200px;
            height: 25px;
            border-radius: 500px;
           }
           .intt{
            width: 100px;
            height: 35px;
            background-color: powderblue;
            font-weight: 800;
            font-size: 20px;
            border-radius: 500px;
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
          p{
            text-align: center;
            margin-top: 480px;
            margin-right: 25px;
          }
  </style>
</head>
<body style="background-color:#9B59B6; background-image: url(img/stu.jpg);">
  <section class="nav">
     <section class="nav">
     <div class="navbar">
      
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="http://localhost/SIMS/adminlogin.php">Admin Panel</a></li>
        <li><a href="http://localhost/SIMS/studentlogin.php">Students Section</a></li>
      </ul>
     </div>
<br>
<br>
<br>
<br>
<br>
<div style="height: 470px; width: 400px; text-align: center; background-color: white; margin-left: 450px;">
  <div style="text-align: center;">
  <img style="text-align: center;" src="img/pic.png" alt="icon" height="200" width="200">
</div><br><br>
<h1 style="text-align: center; font-weight: 800;">Students Login Section</h1><br><br>
<form style="text-align: center;" action="form.php" method="post">
   <b>Username: </b><input class="int" type="text" name="usename" placeholder="Enter Your Username" required><br><br>
  <b>Password: </b><input class="int" type="password" name="password" placeholder="Enter Your Password" required ><br><br>
  <input class="intt" type="submit" name="login" value="Log in">
</form>
</section>


</div>


<?php if(isset($_SESSION['id'])) 

    echo "<p>Incorrect user id or password.</p>";

    session_destroy();

?>




</body>
</html>

