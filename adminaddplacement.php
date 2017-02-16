<?php
$companyname=$_POST['companyname'];
$visiteddate=$_POST['visiteddate'];
$totalrounds=$_POST['totalrounds'];
include('dataconnection.php');
$sql="insert into placements(companyname,visiteddate,totalrounds) values('$companyname','$visiteddate','$totalrounds'); ";
mysqli_query($con,$sql);
mysqli_close($con);
header("Location:placements.php");
?>