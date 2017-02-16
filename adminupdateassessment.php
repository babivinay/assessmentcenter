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
$aid=$_GET['aid'];
include('dataconnection.php');
$sql="select * from assessments where aid='$aid';";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
?>
<div class="col-sm-3">
</div>
<div class="col-sm-6">
<form action="adminupdateassessmentaction.php" method="post">
<table class="table table-hover">
<tr>
	<th>Assessment name</th>
	<td><input class="form-control" name="aname" type="text" value="<?php echo $row['aname']; ?>"></td>
</tr>
<tr>
	<th> Date</th>
	<td><input type="date" class="form-control" name="adate" value="<?php echo $row['adate']; ?>"></td>
</tr>

<tr>
<td colspan=2 align="center">
<input type="hidden" value="<?php echo $aid; ?>" name="aid">
<input type="submit" value="update" class="btn btn-warning ">
&nbsp&nbsp
<a <?php if($_SESSION['username']!='admin') echo "disabled"; ?> data-toggle="tooltip" title="id deleted all records under this class will be deleted" class="btn btn-danger" href="admindeleteassmnt.php?aid=<?php echo $aid; ?> ">Delete</a>

</td>
</tr>
</table>
</form>
</div>
<?php mysqli_close($con); ?>
</body>
</html>


