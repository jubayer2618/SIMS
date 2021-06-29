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
  .one{
    float: left;
    margin-left: 150px;
     padding: 10px;
  }
  .two{
    float: left;
    padding: 10px;
  }
    .three{
    float: left;
     padding: 10px;
  } 
    .four{
    float: left;
     padding: 10px;
  }
   .form{
    height: 500px;
    width: 500px;
    float: left;

    margin-top: 70px;
    margin-left: 60px;
    text-align: center;
   } 
    .map{
    height: 500px;
    width: 500px;
    float: left;
    margin-top: 70px;
    margin-left: 90px;
   } 
     .int{
      height: 30px;
      width: 400px;
      background-color: #E5E8E8;
       background: transparent;
    outline: none;
     }  
     .intt{
       height: 100px;
      width: 400px;
      background-color: #A3E4D7;
       background: transparent;
    outline: none;
     }
     .inttt{
       height: 40px;
       width: 400px;
       background-color: #5DADE2;
       font-weight:bold;
       font-size: 20px;
       background: transparent;
       outline: none;
       font-style: italic;
     }    
  </style>
</head>
<body style="background-color: #BB8FCE; background-image: url(img/contact.jpg);">
  
  <div>
    <section class="nav">
     <div class="navbar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="contactdata.php">Client Info</a></li>
      </ul>
     </div>
  </section>
  <div class="form" >
    <form action="sendmail.php" method="POST">
      <h1 style="text-align:center;"><i><u>Get In Touch</u></i></h1><br><br>
    <label><i>Name:</i> </label><br>
    <input class="int" type="text" name="name" placeholder="ex: Md. Shihab Mahmud" required><br><br>
    <label><i>E-mail:</i> </label><br>
    <input class="int" type="email" name="email" placeholder="ex: example@gmail.com" required><br><br>
    <label><i>Message:</i> </label><br>
    <textarea class="intt" name="message" placeholder="Write Your Message"></textarea><br><br>
    <input class="inttt" type="submit" name="submit" value="Send Message">
  </form>
  </div>
  
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.893279807131!2d90.37542236228987!3d23.754989569856033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada2664e21%3A0x3c872fd17bc11ddb!2sDaffodil%20International%20University!5e0!3m2!1sen!2sbd!4v1618514179823!5m2!1sen!2sbd" width="570" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
  </div>
</body>
</html>

