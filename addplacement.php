<?php
session_start();
$regno=$_SESSION['regno'];
$year=$_POST['year'];
$comid=$_POST['comid'];
$conductedrounds=$_POST['conductedrounds'];
$qualifiedrounds=$_POST['qualifiedrounds'];
$sfeedback=$_POST['sfeedback'];
//echo $regno."<br>".$year."<br>".$comid."<br>".$conductedrounds."<br>".$qualifiedrounds."<br>".$sfeedback;

include('dataconnection.php');
$sql="insert into placementinfo(regno,comid,year,roundsconducted,roundsqualified,sfeedback) values('$regno','$comid','$year','$conductedrounds','$qualifiedrounds','$sfeedback'); ";
mysqli_query($con,$sql);
mysqli_close($con);
header("Location:placementspage.php");

?>