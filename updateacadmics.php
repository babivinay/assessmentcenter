<?php
session_start();
$regno=$_SESSION['regno'];
$year=$_SESSION['year'];

$obtained1=$_POST['obtained1'];
$total1=$_POST['total1'];
$f1=$_POST['f1'];
$b1=$_POST['b1'];

//echo $obtained1.$total1.$f1.$b1;

$obtained2=$_POST['obtained2'];
$total2=$_POST['total2'];
$f2=$_POST['f2'];
$b2=$_POST['b2'];

$obtained3=$_POST['obtained3'];
$total3=$_POST['total3'];
$f3=$_POST['f3'];
$b3=$_POST['b3'];

$obtained4=$_POST['obtained4'];
$total4=$_POST['total4'];
$f4=$_POST['f4'];
$b4=$_POST['b4'];

$obtained5=$_POST['obtained5'];
$total5=$_POST['total5'];
$f5=$_POST['f5'];
$b5=$_POST['b5'];

$obtained6=$_POST['obtained6'];
$total6=$_POST['total6'];
$f6=$_POST['f6'];
$b6=$_POST['b6'];

$obtained7=$_POST['obtained7'];
$total7=$_POST['total7'];
$f7=$_POST['f7'];
$b7=$_POST['b7'];

$obtained8=$_POST['obtained8'];
$total8=$_POST['total8'];
$f8=$_POST['f8'];
$b8=$_POST['b8'];

$cgpa=$_POST['cgpa'];

include('dataconnection.php');
$sql="update marks set cgpa='$cgpa',obtained1='$obtained1',total1='$total1',f1='$f1',b1='$b1',obtained2='$obtained2',total2='$total2',f2='$f2',b2='$b2',obtained3='$obtained3',total3='$total3',f3='$f3',b3='$b3',obtained4='$obtained4',total4='$total4',f4='$f4',b4='$b4',obtained5='$obtained5',total5='$total5',f5='$f5',b5='$b5',obtained6='$obtained6',total6='$total6',f6='$f6',b6='$b6',obtained7='$obtained7',total7='$total7',f7='$f7',b7='$b7',obtained8='$obtained8',total8='$total8',f8='$f8',b8='$b8' where regno='$regno' ";
mysqli_query($con,$sql);

 mysqli_close($con); 
header("Location:selfdiscovery.php");
?>