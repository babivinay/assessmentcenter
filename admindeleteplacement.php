<?php
$comid=$_GET['comid'];
//echo $cid;
include('dataconnection.php');
$sql="delete from placements where comid='$comid';";
mysqli_query($con,$sql);
mysqli_close($con); 
header("Location:placements.php");

?>