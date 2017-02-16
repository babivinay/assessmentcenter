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
        li
        {
          font-size:17px;
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
            
           
        ?>
    
    <div class="container"><br>
  		 <div class="well well-lg"><div style="float:left"><big><font size="8px" face="Monotype Corsiva">SELF DISCOVERY </font></big></div><h4 align="right">Welcome <font color="green"><b><?php echo $_SESSION['name']."  -  ".$_SESSION['regno'] ?></b> </font>&nbsp&nbsp<a data-toggle="tooltip" title="home" href="userpage.php" ><big><span class="glyphicon glyphicon-home"></span></big></a>&nbsp&nbsp&nbsp<a data-toggle="tooltip" title="logout" href="logout.php" ><big><span class="glyphicon glyphicon-off"></span></big></a></h4></div>
       <div class="col-sm-12 well">
                            <?php $s="select * from sdiscovery where regno='$regno';";
                             $rr=mysqli_query($con,$s);
                             $row=mysqli_fetch_array($rr);
                             if($row['purpose']!="")
                             {

                             ?>
                             <table class="table">
                                <caption><b>Self Discovery</b></caption>
                                <tr>
                                    <th>Purpose Of Joining </th> <td><?php echo $row['purpose']; ?></td>
                                </tr>
                                <tr>
                                    <th>Areas of Interests </th> <td> <ul>
                                                                          <li><?php echo $row['i1']; ?></li>
                                                                          <li><?php echo $row['i2']; ?></li>
                                                                          <li><?php echo $row['i3']; ?></li>
                                                                      </ul>

                                     </td>
                                </tr>
                                <tr>
                                    <th>Areas to be improved </th> <td> <ul>
                                                                          <li><?php echo $row['im1']; ?></li>
                                                                          <li><?php echo $row['im2']; ?></li>
                                                                          <li><?php echo $row['im3']; ?></li>
                                                                      </ul>

                                     </td>
                                </tr>
                                
                            </table>
                            <?php
                             } 
                            ?>



                    </div>

       <div class="col-sm-12 well">
        <form action="sdiscovery.php" method="post">
          <big><b>ROAD TO SELF DISCOVERY</b> </big><br><br>
          <ol>
              <li>  Please indicate the purpose of joining Engineering Course!</li>
                <ul>
                  <li>Software Job</li>
                  <li>Core Job</li>
                  <li>Higher Education (M.Tech ,M.S ,MBA)</li>
                  <li>Enterpreneur</li>
                </ul>
                <label><br>Enter Your Answer:  </label>
                <input type="text" name="purpose" required placeholder="if not above mention your answer" class="form-control" value="<?php echo $row['purpose']; ?>">
                <b><br><i>Goal: The student will be made aware of different kind of opportunities in each of the above areas. </i></b><br><br>
              <li> I am Good at (indicate your skills / strengths / arts / etc.)</li>
                <label><br>Interest -1  </label>
                <input type="text" name="i1" required placeholder="Enter your area of Interest" class="form-control" value="<?php echo $row['i1']; ?>">
                <label><br>Interest -2  </label>
                <input type="text" name="i2" required placeholder="Enter your area of Interest" class="form-control" value="<?php echo $row['i2']; ?>">
                <label><br>Interest -3  </label>
                <input type="text" name="i3" required placeholder="Enter your area of Interest" class="form-control" value="<?php echo $row['i3']; ?>">
                <b><i><br>Goal: The student will be guided to improvise upon his skills during the subsequent years. </i></b>
                <br><br>
                <li> I would like to improve upon _____________________ <br>(should write the areas which are causing difficulties to achieve goals. The list can include some personality areas or technical aspects which he/she wish to improve during the next three years.) </li>
                <label><br>Field -1  </label>
                <input type="text" name="im1" required placeholder="Enter your area of improvement" class="form-control" value="<?php echo $row['im1']; ?>">
                <label><br>Field -2 </label>
                <input type="text" name="im2" required placeholder="Enter your area of improvement" class="form-control" value="<?php echo $row['im2']; ?>">
                <label><br>Field -3  </label>
                <input type="text" name="im3" required placeholder="Enter your area of improvement" class="form-control" value="<?php echo $row['im3']; ?>"><br>
                <li>Rate Your Communication SKills    <?php
                                        $var = $row['crate'];
                                        $arr = array("Confident","Less Confident");
                                    ?>
                                        <select class="form-control"  name="crate" required>
                                        <option value="">None</option>
                                            <?php
                                                $len = count($arr);
                                                $i=0;   
                                                foreach ($arr as $state){
                                                    if($state == $var)
                                                        echo "<option value='".$state."' selected>".$state."</option><br>";
                                                    else
                                                        echo "<option value='".$state."'>".$state."</option><br>";
                                                }
                                            ?>                                           
                                        </select> 

                </li><br>
                <li>If above answer is Less Confident Specify the reason
                                                    <?php
                                        $var = $row['lessconfident'];
                                        $arr = array("Stage-Fear","English Language Skills");
                                    ?>
                                        <select class="form-control"  name="lessconfident" required>
                                        <option value="">None</option>
                                            <?php
                                                $len = count($arr);
                                                $i=0;   
                                                foreach ($arr as $state){
                                                    if($state == $var)
                                                        echo "<option value='".$state."' selected>".$state."</option><br>";
                                                    else
                                                        echo "<option value='".$state."'>".$state."</option><br>";
                                                }
                                            ?>                                           
                                        </select> 
                                                    <br>
                <li>Areas I want to improve communication skills </li>
                <label><br>Field -1  </label>
                <input type="text" name="cm1"  required placeholder="Enter your area of improvement" class="form-control" value="<?php echo $row['cm1']; ?>">
                <label><br>Field -2 </label>
                <input type="text" name="cm2" required placeholder="Enter your area of improvement" class="form-control" value="<?php echo $row['cm2']; ?>">
                <label><br>Field -3  </label>
                <input type="text" name="cm3"   placeholder="Enter your area of improvement" class="form-control" value="<?php echo $row['cm3']; ?>">
                <br>
                <li>Rate Your Language Skills
                                                    
                                     <?php
                                        $var = $row['langskillsrate'];
                                        $arr = array("Very Good","Good","Above Average","Average","Below Average","Poor");
                                    ?>
                                        <select class="form-control"  name="langskillsrate" required>
                                        <option value="">None</option>
                                            <?php
                                                $len = count($arr);
                                                $i=0;   
                                                foreach ($arr as $state){
                                                    if($state == $var)
                                                        echo "<option value='".$state."' selected>".$state."</option><br>";
                                                    else
                                                        echo "<option value='".$state."'>".$state."</option><br>";
                                                }
                                            ?>                                           
                                        </select>
                                                    <br>
            <li>Rate Your Writing Skills
                                                    
                                     <?php
                                        $var = $row['writeskillsrate'];
                                        $arr = array("Very Good","Good","Above Average","Average","Below Average","Poor");
                                    ?>
                                        <select class="form-control"  name="writeskillsrate" required>
                                        <option value="">None</option>
                                            <?php
                                                $len = count($arr);
                                                $i=0;   
                                                foreach ($arr as $state){
                                                    if($state == $var)
                                                        echo "<option value='".$state."' selected>".$state."</option><br>";
                                                    else
                                                        echo "<option value='".$state."'>".$state."</option><br>";
                                                }
                                            ?>                                           
                                        </select>
                                                    <br>



          </ol><br>
          <center><input type="submit" value="submit" class="btn btn-primary btn-lg"></center>
          </form>
       </div>
    </div>
    <?php mysqli_close($con); ?>
  </body>
</html>