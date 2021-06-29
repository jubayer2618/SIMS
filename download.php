<?php
include("conn.php");
$id = $_GET['sid'];
$query = "select * from tblstudent where id = '$id'";
$data = mysqli_query($conn,$query);

$row = mysqli_fetch_array($data);

$filepath = "upload/" .$row['picture'];


header('content-Disposition: attachment; filename =' . basename($filepath));
header('content-length: ' . filesize($filepath));

readfile($filepath);

?>