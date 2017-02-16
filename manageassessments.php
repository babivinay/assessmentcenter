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
    <div class="container ">
    <?php include('adminheader.php'); ?>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-12 well">
    <?php
    	
    	
                $sql="select * from assessments;";
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
                            <caption><b><big>Assessments Details</big></b></caption>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Assessment Name</th>
                                    <th>Date</th>
                                    
                                    <th><center>Update</center></th>
                                </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td><?php echo $s;  ?></td>
                        <td><?php echo $row['aname']; ?></td>
                        <td><?php echo $row['adate']; ?></td>
                        	
                         <td align="center">
                         <a data-toggle="tooltip" title="Update" href="adminupdateassessment.php?aid=<?php echo $row['aid']; ?> "><big><font color="orange"><big><span class="glyphicon glyphicon-refresh"></span></big></font></big></a>

                         
                         </td>
                    </tr>

                    <?php
                    $s=$s+1;
                }


            ?>
            
        </table>
        
       

    </div>
    <div class="col-sm-12 well">
    	<b><big>Add New Assessment</big> </b><br><br>
    	<center><form action="addassessment.php" method="POST" class="form-inline">
            <label>Assessment Name :</label>
            	<input type="text" name="aname" class="form-control" required>
            <label>Conducted Date : </label>
            	<input type="date" name="adate" class="form-control" required>&nbsp
            	<input type="submit" class="btn btn-primary" value="Add">
            </form></center>

    </div>
    </div>
    <?php mysqli_close($con); ?>
   </body>
</html>