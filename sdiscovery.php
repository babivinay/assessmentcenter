<?php
session_start();

if($_SESSION['valid']!='T')
{
    include('login-check.php');
}
$regno=$_SESSION['regno'];
$purpose=$_POST['purpose'];
$i1=$_POST['i1'];
$i2=$_POST['i2'];
$i3=$_POST['i3'];
$im1=$_POST['im1'];
$im2=$_POST['im2'];
$im3=$_POST['im3'];
$crate=$_POST['crate'];
$lessconfident=$_POST['lessconfident'];
$cm1=$_POST['cm1'];
$cm2=$_POST['cm2'];
$cm3=$_POST['cm3'];
$langskillsrate=$_POST['langskillsrate'];
$writeskillsrate=$_POST['writeskillsrate'];

//echo $crate.$lessconfident.$cm1.$cm2.$cm3.$langskillsrate.$writeskillsrate;

include('dataconnection.php');
$sql="update sdiscovery set purpose='$purpose',i1='$i1',i2='$i2',i3='$i3',im1='$im1',im2='$im2',im3='$im3',crate='$crate',lessconfident='$lessconfident',cm1='$cm1',cm2='$cm2',cm3='$cm3',langskillsrate='$langskillsrate',writeskillsrate='$writeskillsrate' where regno='$regno'; ";


//$sql="insert into sdiscovery values('$regno','$purpose','$i1','$i2','$i3','$im1','$im2','$im3'); ";
mysqli_query($con,$sql);
 mysqli_close($con); 
header("Location:assessment.php");

?>