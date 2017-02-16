<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="shortcut icon" href="images/learn-icon.png" type="image/png">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <title>Student register form</title>
        <script>
            $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip(); 
            });
        </script>
        <style>
        .zoom
        {
            zoom:85%;
        }
        .rotates {
                    width: 30%;
                    height: 40%;

                     -webkit-transition: width 0.5s, height 0.5s, -webkit-transform 0.5s; /* Safari */
                    transition: width 0.6s, height 0.6s, transform 0.5s;
                }

                .rotates:hover {
                         width: 30%;
                         height: 40%;
                        -webkit-transform: rotate(360deg); /* Safari */
                         transform: rotate(360deg);
                }

        </style>
        
    </head>
    <body>
        
        <?php
            //error_reporting(0);
            session_start();
            if($_SESSION['valid']!='T')
            {
                include('login-check.php');
            }
            if($_SESSION['flag']=='0')
            {?>
                <script>
                        alert('please Upadate your profile before updating CRT details.....'); 
                        window.location='register-form.php';
            </script><?php
            }
            include('dataconnection.php');
            $regno=$_SESSION['regno'];
            $year=$_SESSION['year'];
            

        ?>

    <div class="container zoom">
        <div class="well well-lg"><div style="float:left"><big><font size="6px" face="Monotype Corsiva">PLACEMENTS INFO </font></big></div><h4 align="right">Welcome <font color="green"><b><?php echo $_SESSION['name']."  -  ".$_SESSION['regno'] ?></b> </font>&nbsp&nbsp<a data-toggle="tooltip" title="home" href="userpage.php" ><big><span class="glyphicon glyphicon-home"></span></big></a>&nbsp&nbsp&nbsp<a data-toggle="tooltip" title="logout" href="logout.php" ><big><span class="glyphicon glyphicon-off"></span></big></a></h4></div>


        <div class=" cols-lg-12 cols-sm-6">
             <div class=" cols-lg-12 cols-sm-6"><marquee scrolldelay="150"><font face="Lucida Handwriting"> <big>CENTER FOR LEARNING AND DEVELOPMENT , SRKR Engineering College - Bhimavaram</big></font></marquee></div>
        </div>

        
            <div class="col-sm-12 well">
            <?php
                $sql="select * from placements p,placementinfo pi where p.comid=pi.comid and regno='$regno' order by year asc;";
                $re=mysqli_query($con,$sql);
                $flag=0;
                $k=1;
                while($row=mysqli_fetch_array($re))
                {
                    if($flag==0)
                    {
                        $flag=1;
                        ?>
                            <table class="table table-hover">
                            <caption><b><big>Placements Details</big></b></caption>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Company Name</th>
                                    <th>Date</th>
                                    <th>Year</th>
                                    <th>Conducted rounds</th>
                                    <th>Qualified rounds</th>
                                    <th>Feedback</th>
                                    <th></th>
                                </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td><?php echo $row['companyname']; ?></td>
                        <td><?php echo $row['visiteddate']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['roundsconducted']; ?></td>
                        
                        <td><?php echo $row['roundsqualified']; ?></td>
                        <td><?php echo $row['sfeedback']; ?> </td>
                        <td><big><a data-toggle="tooltip" title="delete" href="deleteplacement.php?slno=<?php echo $row['slno']; ?> "><span class="glyphicon glyphicon-trash"></span></a></big></td>
                    </tr>

                    <?php
                    $k=$k+1;
                }


            ?>
            </table>

            </div>
        

        <div class=" cols-lg-12 cols-sm-6">
            <div class="col-sm-12 well">
                <h3><b><font color="#5900b3"> Add Placements Details</font></b></h3><br>
             <div class="row">
             <form action="addplacement.php" method="post" >
                <div class="col-sm-12 ">
                    
                    <label>&nbsp&nbsp&nbsp&nbspYear & Sem</label>
                    <select name="year" required="" class="form-control">
                        <option value="">none</option>
                        
                        <option>3<sup> rd </sup> year (SEM-I)</option>
                        <option>3<sup> rd </sup> year (SEM-II)</option>
                        <option>4<sup> th </sup> year (SEM-I)</option>
                        <option>4<sup> th </sup> year (SEM-II)</option>
                    </select>
                    
                <label>&nbsp&nbsp&nbsp&nbsp&nbsp<br>Company  Name</label>
                <select name='comid' class="form-control" required><option value="">none</option>
                <?php
                
                $sql11="select * from placements order by companyname asc;";
                $resultt=mysqli_query($con,$sql11);
                while($row=mysqli_fetch_array($resultt))
                {
                ?>
                <option value="<?php echo $row['comid'];  ?>"> <?php echo $row['companyname']." <small>on </small> ".$row['visiteddate']; ?> </option>

                <?php
                }
                ?>
                mysqli_close($con);
                ?>
                </select>
                
                
                <label>&nbsp&nbsp&nbsp&nbsp<br>Conducted Rounds</label>
                <input type="text" name="conductedrounds" class="form-control" placeholder="Enter number" required>
                <label>&nbsp&nbsp&nbsp&nbsp<br>Qualified Rounds</label>
                <input type="text" name="qualifiedrounds" class="form-control" placeholder="Enter number" required>
               
               
                <label><br>Self Feedback about interview</label>
                <textarea name="sfeedback" required rows="10" class="form-control"> 
                    
                </textarea>
                <br>
                <center><input type="submit" value="Submit" class="btn btn-primary btn-lg"></center>
               </div>



                </form>
            </div>
                


            </div>

        </div>
<?php mysqli_close($con); ?>
    </body>
</html>