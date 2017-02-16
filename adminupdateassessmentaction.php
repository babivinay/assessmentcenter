<?php
$aid=$_POST['aid'];
$aname=$_POST['aname'];
$adate=$_POST['adate'];


include('dataconnection.php');
$sql="update assessments set aname='$aname',adate='$adate' where aid='$aid';";
mysqli_query($con,$sql);
mysqli_close($con); 
header("Location:manageassessments.php");
 
?>