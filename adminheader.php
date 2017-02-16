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
            padding-left: 30px;
        	}


        	 .rotates {
    				width: 40%;
    				height: 22%;

                     -webkit-transition: width 0.5s, height 0.5s, -webkit-transform 0.5s; /* Safari */
    				transition: width 0.6s, height 0.6s, transform 0.6s;
				}

				.rotates:hover {
   						 width: 40%;
   						 height: 22%;
                        -webkit-transform: rotate(360deg); /* Safari */
   						 transform: rotate(360deg);
				}
				.rotate {
    				width: 65%;
    				height: 25%;

                     -webkit-transition: width 0.5s, height 0.5s, -webkit-transform 0.5s; /* Safari */
    				transition: width 0.6s, height 0.6s, transform 0.6s;
				}

				.rotate:hover {
   						 width: 65%;
   						 height: 25%;
                        -webkit-transform: rotate(360deg); /* Safari */
   						 transform: rotate(360deg);
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
		<?php
         
            session_start();
            if($_SESSION['valid']!='A')
            {
                include('login-check.php');
            }
            include('dataconnection.php');
            
           
        ?>
		<div class="col-sm-12 well" style="background-color:#99ccff;height:25%;">
  				
				<div class="col-sm-2">
				<a href="adminpage.php"><img src="images/srkr.gif" class="img img-circle" width="90%" height="100%"></a>
				</div>
				<div class="col-sm-1">
				</div>
				
				<div class="col-sm-8"><br>
    			<span class="style1"><b><a href="adminpage.php">COUNSELLING & ASSESSMENT CENTER</a> </b><br></span> 
    			<span class="style2"> &nbsp&nbsp&nbsp&nbsp&nbspSRKR Engineering College - Bhimavaram</span>
    			</div>
    			<div class="col-sm-1"><br><br>
  				 <a href="logout.php" class="btn btn-primary">logout</a>
  				  
				</div>
    	<marquee scrolldelay="150"><b>Center for Learning and Development</b></marquee>
  		</div>

  	</body>
</html>