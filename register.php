<?php
error_reporting(0);
$regno=$_POST['regno'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$registerkey=$_POST['registerkey'];
include('dataconnection.php');
$s1="select registerkey from secretkeys;";
$res=mysqli_query($con,$s1);
$r=mysqli_fetch_array($res);
$keyfromdb=$r['registerkey'];
if($registerkey==$keyfromdb)
{

$sql="select * from sdata where regno='$regno';";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{?>
		<script>
		alert('Student already registered. Login to continue..'); 
		window.location='loginpage.php';
		</script>
		<?php
}
else
{
	$fdst = "images/profile.png";
	$sql1="insert into sdata(regno,name,email,mobile,image) values('$regno','$name','$email','$mobile','$fdst');";
	if(mysqli_query($con,$sql1))
	{
		$s="insert into marks(regno) values('$regno');";
		mysqli_query($con,$s);
		$s="insert into att(regno) values('$regno');";
		mysqli_query($con,$s);
		$s="insert into riasec(regno) values('$regno');";
		mysqli_query($con,$s);
		$s="insert into sdiscovery(regno) values('$regno');";
		mysqli_query($con,$s);
		$s="insert into tat(regno) values('$regno');";
		mysqli_query($con,$s);
		$s="insert into tatscores(regno) values('$regno');";
		mysqli_query($con,$s);
		

		?>
		<script>
		alert('Registration successfully Completed. Please Login to continue.'); 
		window.location='loginpage.php';
		</script>
		<?php 
		mysqli_close($con);

	}
}
}
else
{?>
		<script>
		alert('Invalid Secret Key.'); 
		window.location='loginpage.php';
		</script>
		<?php
}

?>