<?php
include("conn.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['sname'];
$id = $_POST['id'];
$dept = $_POST['dept'];
$batch = $_POST['batch'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$picture = $_FILES['picture']['name'];
$tmpname = $_FILES['picture']['tmp_name'];
$folder = "upload/";

move_uploaded_file($tmpname, $folder.$picture);

$query = "INSERT INTO `tblstudent` (`sname`, `id`, `dept`, `batch`, `email`, `contact`, `picture`) VALUES ('$name', '$id', '$dept', '$batch', '$email', '$contact', '$picture')";


if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
header("location:http://localhost/SIMS/form.php");
?>