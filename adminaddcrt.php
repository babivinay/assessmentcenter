<?php
include('dataconnection.php');
$cname=$_POST['cname'];
$cdate=$_POST['cdate'];
$conductedby=$_POST['conductedby'];
$sql="insert into crt(cname,cdate,conductedby) values('$cname','$cdate','$conductedby'); ";
mysqli_query($con,$sql);


mysqli_close($con); 
header("Location:managecrt.php");
?>