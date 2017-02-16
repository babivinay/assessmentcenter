<?php
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$cdate=$_POST['cdate'];
$conductedby=$_POST['conductedby'];

echo $cid.$cname.$cdate.$conductedby;
include('dataconnection.php');
$sql="update crt set cname='$cname',cdate='$cdate',conductedby='$conductedby' where cid='$cid';";
mysqli_query($con,$sql);

 mysqli_close($con); 
header("Location:managecrt.php");
 ?>