<?php
if(!isset($_SESSION))
	{
		session_start();
	}
$_SESSION['valid']='F';
$username=$_POST['user'];
$password=$_POST['pass'];
include('dataconnection.php');
$sql="select * from admin where username='$username' and password='$password'; ";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
	$_SESSION['valid']='A';
	$_SESSION['username']=$username;
	header("Location:adminpage.php");
}
else
{?>
	<script type="text/javascript">
		alert('Invalid Admin details');
		window.location="loginpage.php";
	</script>
<?php
 mysqli_close($con); 
}
?>