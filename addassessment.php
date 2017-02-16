<?php
include('dataconnection.php');
$aname=$_POST['aname'];
$adate=$_POST['adate'];
$sql="insert into assessments(aname,adate) values('$aname','$adate'); ";
mysqli_query($con,$sql);
mysqli_close($con); 
header("Location:manageassessments.php");


 
 ?>