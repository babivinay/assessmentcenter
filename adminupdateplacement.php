<html>
<head>
<script type="text/javascript">
        	$('.dropdown-toggle').dropdown();

        	$(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip(); 
            });
        </script>
</head>
<body>
<?php

include('adminheader.php');
$comid=$_GET['comid'];
include('dataconnection.php');
$sql="select * from placements where comid='$comid';";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
?>
<div class="col-sm-3">
</div>
<div class="col-sm-6">
<form action="adminupdateplacementaction.php" method="post">
<table class="table table-hover">
<tr>
	<th>Company name</th>
	<td><input class="form-control" type="text" name="companyname" value="<?php echo $row['companyname']; ?>"></td>
</tr>
<tr>
	<th>Visited Date</th>
	<td><input type="date" class="form-control" name="visiteddate" value="<?php echo $row['visiteddate']; ?>"></td>
</tr>
<tr>
	<th>Total Rounds</th>
	<td><input type="text" class="form-control" name="totalrounds" value="<?php echo $row['totalrounds']; ?>"></td>
</tr>
<tr>
<td colspan=2 align="center">
<input type="hidden" value="<?php echo $comid; ?>" name="comid">
<input type="submit" value="update" class="btn btn-warning ">
&nbsp&nbsp
<a <?php if($_SESSION['username']!='admin') echo "disabled"; ?> data-toggle="tooltip" title="id deleted all records under this class will be deleted" class="btn btn-danger" href="admindeleteplacement.php?comid=<?php echo $comid; ?> ">Delete</a>

</td>
</tr>
</table>
</form>
</div>
<?php mysqli_close($con); ?>
</body>
</html>


