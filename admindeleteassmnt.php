<?php
$aid=$_GET['aid'];
echo $aid;
include('dataconnection.php');
$sql="delete from assessments where aid='$aid';";
mysqli_query($con,$sql);
mysqli_close($con);
header("Location:manageassessments.php");

?>