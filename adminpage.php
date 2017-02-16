<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <title>Admin Page</title>
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


        	
				.image-upload > input
					{
   					 display: none;
					}
        </style>
        <script type="text/javascript">
        	$('.dropdown-toggle').dropdown();

        	$(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip(); 
            });
        </script>
       <link rel="shortcut icon" href="images/learn-icon.png" type="image/png">
    </head>
    <body>     
    <br>
    <div class="container">
  		<?php
      include('adminheader.php');
    ?>
    <div class="col-sm-12">
    <form class="form-inline" action="getstudentdata.php" method="POST">
    <center><label>Enter Student Register Number&nbsp&nbsp</label>
    <input type="text" name="regno" required class="form-control">&nbsp&nbsp&nbsp
    <input type="submit" class="btn btn-primary" value="Search"></center>
    </form>
    </div>
        <div class="col-sm-6">

            <div class="well">
                  <span class="glyphicon glyphicon-th-list"></span> &nbsp <a href="studentsdetails.php">View Students Details</a>
            </div>
            <div class="well">
                  <span class="glyphicon glyphicon-th-list"></span> &nbsp <a href="placements.php">Manage Placements</a>
            </div>
            
              
        </div>
        <div class="col-sm-6">
              <div class="well">
                  <span class="glyphicon glyphicon-th-list"></span> &nbsp <a href="managecrt.php">Manage CRT Classes</a>
            </div>
            <div class="well">
                  <span class="glyphicon glyphicon-th-list"></span> &nbsp <a href="manageassessments.php">Manage Assessments</a>
            </div>
        </div>
        <div class="col-sm-6">
              <div class="well">
                  <span class="glyphicon glyphicon-th-list"></span> &nbsp <a href="managebatches.php">Manage Batches</a>
            </div>
            
        </div>
    </div>
  </body>
</html>