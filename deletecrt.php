<?php
$slno=$_GET['slno'];
include('dataconnection.php');
$sql="delete from scrt where slno='$slno';";
mysqli_query($con,$sql);
 mysqli_close($con); 
header("Location:crtpage.php");
?>