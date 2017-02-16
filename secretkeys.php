<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <title>Admin Page</title>
    </head>
    <body>
    <?php

         	error_reporting(0);
            session_start();
            if($_SESSION['valid']!='A')
            {?>
        		<script>
        		alert("unauthorized access");
        		window.location="loginpage.php";
        		</script>

               <?php 
            }
    	include('dataconnection.php');
    	$sql="select * from secretkeys;";
    	$res=mysqli_query($con,$sql);
    	$row=mysqli_fetch_array($res);

    	
    ?>
    <br><br>
    <div class="container">
    <div class="col-sm-12 well">
    <h3 align="center"><a href="adminpage.php">Assessment Center</a></h3>
    <table class="table table-hover">
    <caption><b><big>Current Keys</big></b></caption>
    <tr>
    		<td>Login Key </td>
    		<td><?php echo $row['loginkey']; ?></td>
    </tr>
    <tr>
    		<td>Register Key </td>
    		<td><?php echo $row['registerkey']; ?></td>
    </tr>
    <tr>
    	<td colspan=2>
    	<form action="secretkeys.php" method="post" class="form-inline">
    		<center><select name="type" required class="form-control">
    			<option value="">none</option>
    			<option value="loginkey">Login Key</option>
    			<option value="registerkey">Register Key</option>
    		</select>
    		<input type="text" name="key" placeholder="enter new key" required class="form-control">
    		<input type="submit" name="submit" class="btn btn-primary" value="Update">
    		</center>
    		</form>
    		</td>
    		</tr>
    		<?php mysqli_close($con); ?>
    </table>
    </div>
    </div>
    <?php
		function update()
		{
		    $type=$_POST['type'];
		    $key=$_POST['key'];
		    //echo $type.$key;
		    include('dataconnection.php');
		    $sql="update secretkeys set $type='$key'; ";
		    mysqli_query($con,$sql);
		    mysqli_close($con);
		    header("Location:secretkeys.php");

		}
		if(isset($_POST['submit']))
		{
		   update();
		} 
		?>
    </body>
</html>