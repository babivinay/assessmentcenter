<html>
<body>
<?php
session_start();
$year=$_POST['year'];

$marks=$_POST['marks'];
$aid=$_POST['aid'];

include('dataconnection.php');
$regno=$_SESSION['regno'];

$sql="select count(regno) c from fassessment where regno='$regno';";
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


$sql="insert into fassessment(regno,year,aid,marks,result) values('$regno','$year','$aid','$marks','$result'); ";
mysqli_query($con,$sql);
 mysqli_close($con);
header("Location:assessment.php");
}
else
{
	?>
	<script>
		alert('Maximum Assessments completed.....'); 
		window.location='assessment.php';
	</script>
	<?php
}





?>
</body>
</html>