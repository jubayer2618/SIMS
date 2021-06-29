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

// sql to delete a record
$sql = "UPDATE `tblstudent` SET `sname` = '$name', `id` = '$id', `dept` = '$dept', `batch` = '$batch', `email` = '$email',
`contact` = '$contact' WHERE `tblstudent`.`id` = $id;";  

if ($conn->query($sql) === TRUE) {
  echo "Record Updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

header("location:http://localhost/SIMS/form.php")
?>