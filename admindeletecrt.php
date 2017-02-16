<?php
$cid=$_GET['cid'];
echo $cid;
include('dataconnection.php');
$sql="delete from crt where cid='$cid';";
mysqli_query($con,$sql);
mysqli_close($con); 
header("Location:managecrt.php");

?>