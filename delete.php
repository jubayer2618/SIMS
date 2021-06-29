<?php
include("conn.php");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['sid'];

// sql to delete a record
$sql = "DELETE FROM `tblstudent` WHERE `tblstudent`.`id` = $id";   


if ($conn->query($sql) === TRUE)

{
  echo  "Record deleted successfully";

} else

{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

header("location:http://localhost/SIMS/viewstudents.php")
?>
