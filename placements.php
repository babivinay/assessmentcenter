<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link rel="shortcut icon" href="images/learn-icon.png" type="image/png">
        <style>
        	.style1
        	{
        		font-family:"Tahoma";
        		font-size:30px;
        	}
        	.style2
        	{
        		font-family:"Verdana";
        		font-size:20px;
        	}
        </style>
        <script type="text/javascript">
        	$('.dropdown-toggle').dropdown();

        	$(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip(); 
            });
        </script>
    </head>
    <body>
    <div class="container">
    <?php include('adminheader.php'); ?>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-12 well">
    <?php
    	
    	
                $sql="select * from placements;";
                $re=mysqli_query($con,$sql);
                $flag=0;
                $s=1;
                while($row=mysqli_fetch_array($re))
                {
                	
                    if($flag==0)
                    {
                        $flag=1;
                        ?>
                            <table class="table table-hover">
                            <caption><b><big>CRT Classes Details</big></b></caption>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Company Name</th>
                                    <th>Visited Date</th>
                                    <th>Total Rounds</th>
                                    <th><center>Update </center></th>
                                </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td><?php echo $s;  ?></td>
                        <td><?php echo $row['companyname']; ?></td>
                        <td><?php echo $row['visiteddate']; ?></td>
                        <td><?php echo $row['totalrounds']; ?></td>
                        
                         <td align="center">
                         <a data-toggle="tooltip" title="update" href="adminupdateplacement.php?comid=<?php echo $row['comid']; ?> "><big><font color="orange"><big><span class="glyphicon glyphicon-refresh"></span></big></font></big></a>&nbsp&nbsp&nbsp&nbsp&nbsp

                         
                         </td>
                    </tr>

                    <?php
                    $s=$s+1;
                }


            ?>
            


        </table>
        </div>
        
       <div class="col-sm-12 well">
       <form action="adminaddplacement.php" method="POST" class="form-inline">
            <center><b><big>Add New Company Details Here</big></b><br><br>
            <label>Company Name:</label>
                <input type="text" name="companyname" class="form-control" required>
            <label>Visited Date : </label>
                <input type="date" name="visiteddate" class="form-control" required>
                <label>Total rounds : </label>
                <input type="text" name="totalrounds" class="form-control" required>
                <input type="submit" class="btn btn-primary btn-lg" value="Add"></center>
            </form>
       </div>
       </div>

    <?php mysqli_close($con); ?>        
   </body>
</html>