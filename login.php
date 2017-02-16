<?php
if(!isset($_SESSION))
	{
		session_start();
	}

include('dataconnection.php');

$regno=$_POST['regno'];
$password=$_POST['password'];
$loginkey=$_POST['loginkey'];
$s1="select loginkey from secretkeys;";
$res=mysqli_query($con,$s1);
$r=mysqli_fetch_array($res);
$keyfromdb=$r['loginkey'];
if($loginkey==$keyfromdb)
{
$sql="select * from sdata where regno='$regno';";
$result = mysqli_query($con,$sql);
$_SESSION['valid']='F';

if($row=mysqli_fetch_array($result))
	{
		if($password==$regno)
		{

			$_SESSION["regno"] =$_POST["regno"];
			$_SESSION['name']=$row['name'];
			$_SESSION['mobile']=$row['mobile'];
			$_SESSION['email']=$row['email'];
			$_SESSION['valid']="T";
			$_SESSION['flag']=$row['flag'];
			$_SESSION['year']=substr($row['year'],0,1);
			$_SESSION['image']=$row['image'];
			if($row['flag']=='0')
				header("Location: register-form.php");
			else
				header("Location:userpage.php");
			
		}
		else
		{ ?>
			<script>
			alert('Invalid password entered.'); 
			window.location='loginpage.php';
			</script>
			<?php
		}
	}
	else
	{
	?>
		<script>
		alert('Invalid register number entered.'); 
		window.location='loginpage.php';
		</script>
	<?php	 
		//echo "<br /> <a href='login-form.php'>Try Again</a>";
	}	
}
else
	{
	?>
		<script>
		alert('Invalid Secret Key entered'); 
		window.location='loginpage.php';
		</script>
	<?php	 
		//echo "<br /> <a href='login-form.php'>Try Again</a>";
	}

 mysqli_close($con);
?>