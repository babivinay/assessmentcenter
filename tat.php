<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <title><?php session_start(); echo $_SESSION['name']." -details";   ?></title>
        <style>
        .zoom
            {
                zoom:90%;
            }
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
        .para
        {
            text-align: justify; text-justify: inter-word;font-size:17px;
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
    
    <div class="container zoom"><br>
  		 <div class="well well-lg"><div style="float:left"><big><font size="6px" face="Monotype Corsiva"><b>THEMATIC APPERCEPTION TEST  </b></font></big></div><h4 align="right">Welcome <font color="green"><b><?php echo $_SESSION['name']."  -  ".$_SESSION['regno'] ?></b> </font>&nbsp&nbsp<a data-toggle="tooltip" title="home" href="userpage.php" ><big><span class="glyphicon glyphicon-home"></span></big></a>&nbsp&nbsp&nbsp<a data-toggle="tooltip" title="logout" href="logout.php" ><big><span class="glyphicon glyphicon-off"></span></big></a></h4></div>
         <div class="col-sm-12 well para" >
                <p><b>Thematic Apperception Test</b> is the second objective test employed by the IT Companies to test the personality of the candidate. It is also a test of the candidate’s imagination. If an outline or hazy and vague picture is shown to a candidate, he will interpret it according to his imagination. These pictures, therefore, stimulate the thought processes of the candidate and he is able to weave around it a story.</p>
                <p>It is an attempt to let the candidate have flights of imagination. It is a method of exploring matter from a person’s subconscious mind by stimulating his fantasy and interpreting it. The candidate is encouraged to come out with ideas and inner hidden or latent material which will not be available to us normally.</p>
                <p>The students are asked to tell as dramatic a story as they can for each picture presented, including the following:
                <ul>
                    <li> What has led up to the situation?</li>
                    <li> What is happening at the moment?</li>
                    <li> What the characters are feeling and thinking their mood?</li>
                    <li>What is the outcome of the story?</li>
                </ul>


                </p>
         </div>
         <div class="col-sm-12 well">
         <h2 align="center">Sample Test</h2>
            <big><b>What Do You See in the Picture?</b></big>
            <center><h3>Instructions</h3></center>
            <div class="col-sm-12 para">
           <p> Look at the picture. Your task is to write a complete story about the picture you see above. This should be an imaginative story with a beginning, middle, and an end. Try to portray who the people might be, what they are feeling, thinking, and wishing. Try to tell what led to the situation depicted in the picture and how everything will turn out in the end.</p>

           <p> Be sure and examine the picture for several seconds before clicking the button below. Once you push the button, you will have 10 minutes to write whatever story comes into your mind. You should write continuously the entire 10 minutes. If you need more than 10 minutes, feel free to continue writing until you are finished.</p>

           </div>
         <center><img src="images/tatpic.jpg" width="50%" height="50%"></center>
         <div class="col-sm-12">
         <form action="tatupdate.php" method="post">
            <?php
                $sql="select * from tat where regno='$regno';";
                $res=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($res);

            ?>  
         <br>
            <textarea class="form-control" name="tatdata" rows="10" placeholder="Start typing Here.." ><?php echo $row['tatdata']; ?></textarea>
            <br>
               <center> <input type="submit" value="submit" class="btn btn-primary btn-lg"></center>

         </form>
         </div>
         <br>
         <p class="para">After Completion of Submission copy your answer and  <a target="new" href="http://www.utpsyc.org/TATintro/">click here </a> for test. After Completion of test fill the following details. </p>
         </div>
         <div class="col-sm-12 well">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                <?php
                    $s1="select * from tatscores where regno='$regno';";
                    $r=mysqli_query($con,$s1);
                    $rr=mysqli_fetch_array($r);
                ?>
                <form action="tatscoresupdate.php" method="POST"> 
                <table class="table table-hover table-bordered">
                <caption><b><big>TAT Scores</big></b></caption>
                <tr>
                    <th>LIWC dimension</th>
                    <th>Your data</th>
                    <th>Male Average</th>
                    <th>Female Average</th>
                </tr>
                <tr>
                    <th>Need for Achievement</th>
                    <td><input type="text" name="ac1" required class="form-control" value="<?php echo $rr['ac1']; ?>"></td>
                    <td><input type="text" name="ac2" required class="form-control" value="<?php echo $rr['ac2']; ?>"></td>
                    <td><input type="text" name="ac3" required class="form-control" value="<?php echo $rr['ac3']; ?>"></td>
                </tr>
                <tr>
                    <th>Need for Affiliation</th>
                    <td><input type="text" name="af1" required class="form-control" value="<?php echo $rr['af1']; ?>"></td>
                    <td><input type="text" name="af2" required class="form-control" value="<?php echo $rr['af2']; ?>"></td>
                    <td><input type="text" name="af3" required class="form-control" value="<?php echo $rr['af3']; ?>"></td>
                </tr>
                <tr>
                    <th>Need for power</th>
                    <td><input type="text" name="po1" required class="form-control" value="<?php echo $rr['po1']; ?>"></td>
                    <td><input type="text" name="po2" required class="form-control" value="<?php echo $rr['po2']; ?>"></td>
                    <td><input type="text" name="po3" required class="form-control" value="<?php echo $rr['po3']; ?>"></td>
                </tr>
                <tr>
                    <th>Self-references (I, me, my)</th>
                    <td><input type="text" name="sr1" required class="form-control" value="<?php echo $rr['sr1']; ?>"></td>
                    <td><input type="text" name="sr2" required class="form-control" value="<?php echo $rr['sr2']; ?>"></td>
                    <td><input type="text" name="sr3" required class="form-control" value="<?php echo $rr['sr3']; ?>"></td>
                </tr>
                <tr>
                    <th>Social words</th>
                    <td><input type="text" name="so1" required class="form-control" value="<?php echo $rr['so1']; ?>"></td>
                    <td><input type="text" name="so2" required class="form-control" value="<?php echo $rr['so2']; ?>"></td>
                    <td><input type="text" name="so3" required class="form-control" value="<?php echo $rr['so3']; ?>"></td>
                </tr>
                <tr>
                    <th>Positive emotions</th>
                    <td><input type="text" name="pos1" required class="form-control" value="<?php echo $rr['pos1']; ?>"></td>
                    <td><input type="text" name="pos2" required class="form-control" value="<?php echo $rr['pos2']; ?>"></td>
                    <td><input type="text" name="pos3" required class="form-control" value="<?php echo $rr['pos3']; ?>"></td>
                </tr>
                <tr>
                    <th>Negative emotions</th>
                    <td><input type="text" name="neg1" required class="form-control" value="<?php echo $rr['neg1']; ?>"></td>
                    <td><input type="text" name="neg2" required class="form-control" value="<?php echo $rr['neg2']; ?>"></td>
                    <td><input type="text" name="neg3" required class="form-control" value="<?php echo $rr['neg3']; ?>"></td>
                </tr>
                <tr>
                    <th>Big words (> 6 letters)</th>
                    <td><input type="text" name="big1" required class="form-control" value="<?php echo $rr['big1']; ?>"></td>
                    <td><input type="text" name="big2" required class="form-control" value="<?php echo $rr['big2']; ?>"></td>
                    <td><input type="text" name="big3" required class="form-control" value="<?php echo $rr['big3']; ?>"></td>
                </tr>
                <tr>
                <td colspan="4" align="center"><input type="submit" class="btn btn-primary btn-lg">
                </table>
                </form>
                </div>
                <div class="col-sm-2">

                </div>
         </div>
    </div>
    <?php mysqli_close($con); ?>
    </body>
</html>