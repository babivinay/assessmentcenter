<?php
include('dataconnection.php');
$slno=$_GET['slno'];
$sql="delete from placementinfo where slno='$slno'; ";
mysqli_query($con,$sql);
mysqli_close($con);
header("Location:placementspage.php");
?>