<?php
session_start();
$regno=$_SESSION['regno'];
$tatdata=$_POST['tatdata'];
include('dataconnection.php');
$sql="update tat set tatdata='$tatdata' where regno='$regno'; ";
mysqli_query($con,$sql);
 
header("Location:tat.php");

?>