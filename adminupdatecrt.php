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
$cid=$_GET['cid'];
include('dataconnection.php');
$sql="select * from crt where cid='$cid';";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
?>
<div class="col-sm-3">
</div>
<div class="col-sm-6">
<form action="adminupdatecrtaction.php" method="post">
<table class="table table-hover">
<tr>
	<th>CRT Class name</th>
	<td><input class="form-control" type="text" name="cname" value="<?php echo $row['cname']; ?>"></td>
</tr>
<tr>
	<th>Class Date</th>
	<td><input type="date" class="form-control" name="cdate" value="<?php echo $row['cdate']; ?>"></td>
</tr>
<tr>
	<th>Conducted By</th>
	<td><input type="text" class="form-control" name="conductedby" value="<?php echo $row['conductedby']; ?>"></td>
</tr>
<tr>
<td colspan=2 align="center">
<input type="hidden" value="<?php echo $cid; ?>" name="cid">
<input type="submit" value="update" class="btn btn-warning ">
&nbsp&nbsp
<a <?php if($_SESSION['username']!='admin') echo "disabled"; ?> data-toggle="tooltip" title="id deleted all records under this class will be deleted" class="btn btn-danger" href="admindeletecrt.php?cid=<?php echo $cid; ?> ">Delete</a>

</td>
</tr>
</table>
</form>
</div>
<?php mysqli_close($con); ?>
</body>
</html>


