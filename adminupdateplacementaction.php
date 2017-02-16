<?php
$comid=$_POST['comid'];
$companyname=$_POST['companyname'];
$visiteddate=$_POST['visiteddate'];
$totalrounds=$_POST['totalrounds'];

//echo $cid.$cname.$cdate.$conductedby;
include('dataconnection.php');
$sql="update placements set companyname='$companyname',visiteddate='$visiteddate',totalrounds='$totalrounds' where comid='$comid';";
mysqli_query($con,$sql);

 mysqli_close($con); 
header("Location:placements.php");
 ?>