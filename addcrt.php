<?php
session_start();
$year=$_POST['year'];

$marks=$_POST['marks'];
$cid=$_POST['cid'];

include('dataconnection.php');
$regno=$_SESSION['regno'];
$sql="select count(regno) c from scrt where regno='$regno';";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$count=$row['c'];
if($count<24)
{


if($marks>81)
	$result="Very Good";
else if($marks>61)
	$result="Good";
else if($marks>41)
	$result="Average";
else if($marks>21)
	$result="Below Average";
else
	$result="Poor";




$sql="insert into scrt(regno,cid,year,marks,result) values('$regno','$cid','$year','$marks','$result'); ";
mysqli_query($con,$sql);
mysqli_close($con); 
header("Location:crtpage.php");
}
else
{
	?>
	<script>
		alert('Maximum CRT Classes completed.....'); 
		window.location='crtpage.php';
	</script>
	<?php
}



?>