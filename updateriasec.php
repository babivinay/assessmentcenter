<?php
session_start();
include('dataconnection.php');
$regno=$_SESSION['regno'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$sql="update riasec set s1='$s1',s2='$s2',s3='$s3' where regno='$regno'; ";
mysqli_query($con,$sql);
?>
<script>
alert("successful");
</script>
<?php
 mysqli_close($con); 
header("Location:assessment.php");

?>