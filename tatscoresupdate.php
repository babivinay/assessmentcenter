<?php
session_start();
$regno=$_SESSION['regno'];
$ac1=$_POST['ac1'];
$ac2=$_POST['ac2'];
$ac3=$_POST['ac3'];
$af1=$_POST['af1'];
$af2=$_POST['af2'];
$af3=$_POST['af3'];
$po1=$_POST['po1'];
$po2=$_POST['po2'];
$po3=$_POST['po3'];
$sr1=$_POST['sr1'];
$sr2=$_POST['sr2'];
$sr3=$_POST['sr3'];
$so1=$_POST['so1'];
$so2=$_POST['so2'];
$so3=$_POST['so3'];
$pos1=$_POST['pos1'];
$pos2=$_POST['pos2'];
$pos3=$_POST['pos3'];
$neg1=$_POST['neg1'];
$neg2=$_POST['neg2'];
$neg3=$_POST['neg3'];
$big1=$_POST['big1'];
$big2=$_POST['big2'];
$big3=$_POST['big3'];
include('dataconnection.php');
$sql="update tatscores set ac1='$ac1',ac2='$ac2',ac3='$ac3',af1='$af1',af2='$af2',af3='$af3',po1='$po1',po2='$po2',po3='$po3',sr1='$sr1',sr2='$sr2',sr3='$sr3',so1='$so1',so2='$so2',so3='$so3',pos1='$pos1',pos2='$pos2',pos3='$pos3',neg1='$neg1',neg2='$neg2',neg3='$neg3',big1='$big1',big2='$big2',big3='$big3' where regno='$regno' ";
mysqli_query($con,$sql);

 mysqli_close($con); 
 header("Location:tat.php");
?>