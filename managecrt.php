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
    	
    	
                $sql="select * from crt;";
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
                                    <th>CRT Class Name</th>
                                    <th>Date</th>
                                    <th>Conducted By</th>
                                    <th><center>Update </center></th>
                                </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td><?php echo $s;  ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $row['cdate']; ?></td>
                        <td><?php echo $row['conductedby']; ?></td>
                        
                         <td align="center">
                         <a data-toggle="tooltip" title="update" href="adminupdatecrt.php?cid=<?php echo $row['cid']; ?> "><big><font color="orange"><big><span class="glyphicon glyphicon-refresh"></span></big></font></big></a>&nbsp&nbsp&nbsp&nbsp&nbsp

                         
                         </td>
                    </tr>

                    <?php
                    $s=$s+1;
                }


            ?>
            


        </table>
        </div>
        
       <div class="col-sm-12 well">
       <form action="adminaddcrt.php" method="POST" class="form-group">
            <b>Add New CRT Class Here</b><br><br>
            <label>CRT Class Name :</label>
                <input type="text" name="cname" class="form-control" required>
            <label>Conducted Date : </label>
                <input type="date" name="cdate" class="form-control" required>
                <label>Conducted By  : </label>
                <input type="text" name="conductedby" class="form-control" required><br>
                <center><input type="submit" class="btn btn-primary btn-lg" value="Add"></center>
            </form>
       </div>
       </div>

    <?php mysqli_close($con); ?>        
   </body>
</html>