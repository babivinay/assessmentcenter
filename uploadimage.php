<html>
	<head>
		<title>Image Upload</title>
		<link rel="shortcut icon" href="images/learn-icon.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <style>
        .style1
        	{
        		font-family:"Tahoma";
        		font-size:25px;
        	}
        	.style2
        	{
        		font-family:"Monotype Corsiva";
        		font-size:18px;
        	}


        </style>
     </head>
     <body>

     <?php
        	session_start();
            if($_SESSION['valid']!='T')
            {
                include('login-check.php');
            }
       ?>
       <div class="container">
       <div class="col-sm-12 well">
    			
    			<div style="float:right;">
    					<a data-toggle="tooltip" title="home" href="userpage.php" ><big><font size="10px"><span class="glyphicon glyphicon-home"></span></font></big></a>
    					</div>
    				
    				<center>
    					<span class="style1"><b>CENTER FOR LEARNING AND DEVELOPMENT </b><br></span> 
    					
    					<span class="style2">Training & Placement Cell , SRKR Engineering College - Bhimavaram</span>


    			</center>
    	</div>

     		<form action="image.php" method="post" enctype="multipart/form-data" >

     			<center><img src="<?php echo $_SESSION['image'];  ?>" width=30% height=50% alt="no image found"  class="img img-circle" >

     			<br><br>
     			<label>Upload new photo <br>
                <font color="red">Image should be lessthan 500kb</font>

                </label><br><br>
     			<input type="file" name="f1">
     			<br>
     				<input class="btn btn-primary" type="submit">
		</center>
     		</form>

     		</div>
     		
     </body>
</html>