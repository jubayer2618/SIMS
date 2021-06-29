<?php
include("conn.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";


if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
header("location:http://localhost/SIMS/contactdata.php");
?>