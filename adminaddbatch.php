<?php
include('dataconnection.php');
$batch=$_POST['batchname'];
$sql="insert into batch(batchname) values('$batch'); ";
mysqli_query($con,$sql);
mysqli_close($con);
header("Location:managebatches.php");
?>