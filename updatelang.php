<?php
session_start();
$regno=$_SESSION['regno'];
$year=$_SESSION['year'];
$lf1=$_POST['lf1'];
$lf2=$_POST['lf2'];



if($year>1)
{
	
	$ls1=$_POST['ls1'];
	$ls2=$_POST['ls2'];
}
else
{
	
	$ls1="";
	$ls2="";
}
if($year>2)
{

	$lt1=$_POST['lt1'];
	$lt2=$_POST['lt2'];
}
else
{
	
	$lt1="";
	$lt2="";
}
if($year>3)
{
	
	$lfo1=$_POST['lfo1'];
	$lfo2=$_POST['lfo2'];
}
else
{

	$lfo1="";
	$lfo2="";
}



include('dataconnection.php');

$sql="update lang set lf1='$lf1',lf2='$lf2',ls1='$ls1',ls2='$ls2',lt1='$lt1',lt2='$lt2',lfo1='$lfo1',lfo2='$lfo2' where regno='$regno' ";
mysqli_query($con,$sql);
header("Location:assessment.php");
?>