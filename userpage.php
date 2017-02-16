<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <title><?php session_start(); echo $_SESSION['name']." -details";   ?></title>
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
            padding-left: 70px;
        		
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
         
            error_reporting(0);
            if($_SESSION['valid']!='T')
            {
                include('login-check.php');
            }
            include('dataconnection.php');
            $regno=$_SESSION['regno'];
            $sql="select * from sdata where regno='$regno'; ";
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($res);
           
        ?>
    
    <div class="container-fluid well">
  		<div class="col-sm-12 well" style="background-color:#99ccff;height:25%;">
  				<div class="col-sm-1">
				</div>
				
				<div class="col-sm-2">
				<img src="images/srkr.gif" class="img img-circle" width="80%" height="100%">
				</div>
				
				
				<div class="col-sm-7"><br>
    			<span class="style1"><b>COUNSELLING & ASSESSMENT CENTER </b><br></span> 
    			<span class="style2"> SRKR Engineering College - Bhimavaram</span>
    			</div>
    			
    			<div class="col-sm-1"><br><br>
  				 <a href="logout.php" class="btn btn-primary">logout</a>
  				  <!--<div class="dropdown">
  							<button class="btn btn-danger btn-lg dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['name']; ?>
  								<span class="caret"></span></button>
  								<ul class="dropdown-menu">
   									 <li><a href="register-form.php"><b>Profile</b></a></li>
    								<li><a href="academic.php"><b>Academics</b></a></li>
    								<li><a href="logout.php"><b>Logout</b></a></li>
  								</ul>
				  </div> -->
				</div>
    	<marquee scrolldelay="150"><b>Center for Learning and Development</b></marquee>
  		</div>
  		<div class="container">
  				
  			<div class="row">

    			<div class="col-sm-3 ">
      					<center><div > 
      							<a href="uploadimage.php"><img data-toggle="tooltip" title="click to change image" src="<?php echo $row['image'];  ?>" width=65% height=25% alt="no image found"  class="img img-circle" ></a><br><br><a href="register-form.php">Update Profile</a>
      					</div></center>
    			</div>
    			<div class="col-sm-3 ">
      					<center><div > 
      							<a href="academic.php"><img src="images/stat.jpg" alt="no image found" class="img img-circle rotate"><br><br>Academic Details</a>
      					</div></center>
    			</div>
    			<div class="col-sm-3 ">
      					<center><div > 
      							<a href="selfdiscovery.php"><img src="images/sd.jpg" alt="no image found" class="img img-circle rotate"><br><br>Self Discovery </a>
      					</div></center>
    			</div>
    			<div class="col-sm-3 ">
      					<center><div > 
      							<a href="assessment.php"><img src="images/assessment.gif" alt="no image found" class="img img-circle rotate"><br><br>Self Assessment </a>
      					</div></center>
    			</div>
  			</div>
  			<hr width="100%" >
  			<div class="row">
    			<div class="col-sm-3 ">
      					<center><div > 
      							<a href="assessment.php"><img src="images/riasec.jpg" alt="no image found" class="img img-circle rotate"><br><br>RIASEC Test</a>
      					</div></center>
    			</div>
    			<div class="col-sm-3 ">
      					<center><div > 
      							<a href="tat.php"><img src="images/tat.jpg" alt="no image found" class="img img-circle rotate"><br><br>TAT Test</a>
      					</div></center>
    			</div>
    			<div class="col-sm-3 ">
      					<center><div > 
      							<a href="crtpage.php"><img src="images/crt.png" alt="no image found" class="img img-circle rotate" ><br><br>CRT Programs</a>
      					</div></center>
    			</div>
    			<div class="col-sm-3 ">
      					<center><div > 
      							<a href="placementspage.php"><img src="images/placements.png" alt="no image found" class="img img-circle rotate" ><br><br>Placements info </a>
      					</div></center>
    			</div>
  			</div>
	   </div>
	</div>

	<div class="well">
	<center><a href="profilepage.php" class="btn btn-success">Generate Personal profile</a></center>
	</div>
  <div class="footer col-sm-12 well">
  <center>Developed by <b><a target="new" href="https://www.facebook.com/vinaynarayana99">Vinay Narayana</a></b> (CSE,2013-2017)</center>
  </div>
	
	<?php mysqli_close($con); ?>	
</body>
</html>