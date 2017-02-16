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
            function avg()
            {
                var tot=frm.total1.value;
                var obt=frm.obtained1.value;
                var per=(obt/tot)*100;
                frm.marks.value=per;
            }
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
                        alert('please Upadate your profile before updating Assessment details.....'); 
                        window.location='register-form.php';
            </script><?php
            }
            include('dataconnection.php');
            $regno=$_SESSION['regno'];
            $year=$_SESSION['year'];
            

        ?>

    <div class="container zoom">
        <div class="well well-lg"><div style="float:left"><big><font size="8px" face="Monotype Corsiva">SELF ASSESSMENT </font></big></div><h4 align="right">Welcome <font color="green"><b><?php echo $_SESSION['name']."  -  ".$_SESSION['regno'] ?></b> </font>&nbsp&nbsp<a data-toggle="tooltip" title="home" href="userpage.php" ><big><span class="glyphicon glyphicon-home"></span></big></a>&nbsp&nbsp&nbsp<a data-toggle="tooltip" title="logout" href="logout.php" ><big><span class="glyphicon glyphicon-off"></span></big></a></h4></div>


        <div class=" cols-lg-12 cols-sm-6">
             <div class=" cols-lg-12 cols-sm-6"><marquee scrolldelay="150"><font face="Lucida Handwriting"> <big>CENTER FOR LEARNING AND DEVELOPMENT , SRKR Engineering College - Bhimavaram</big></font></marquee></div>
        </div>

        
            <div class="col-sm-12 well">
            <?php
                $sql="select * from assessments a,fassessment f where a.aid=f.aid and f.regno='$regno' order by f.year asc;";
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
                            <caption><b><big>Previous Assessments Details</big></b></caption>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Assessment Name</th>
                                    <th>Date</th>
                                    <th>Year</th>
                                    <th>Marks Obtained (%)</th>
                                    
                                    <th></th>
                                </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td><?php echo $row['aname']; ?></td>
                        <td><?php echo $row['adate']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['marks']." %"; ?></td>
                        
                         <td><big><a data-toggle="tooltip" title="delete" href="deleteassessments.php?slno=<?php echo $row['slno']; ?> "><span class="glyphicon glyphicon-trash"></span></a></big></td></td>
                    </tr>

                    <?php
                    $k=$k+1;
                }


            ?>
            </table>

            </div>
        

        <div class=" cols-lg-12 ">
            <div class="col-lg-12 well">
                <h3><b><font color="#5900b3"> New Assessment</font></b></h3><br>
             <div class="row">
             <form action="updateassessments.php" method="post" class="form-group" name="frm">
               
             <div class="col-sm-2">
                    <label>Year & Sem</label>
                    <select name="year" required="" class="form-control">
                        <option value="">none</option>
                        <option>1<sup> st </sup> year (SEM-I)</option>
                        <option>1<sup> st </sup> year (SEM-II)</option>
                        <option>2<sup> nd </sup> year (SEM-I)</option>
                        <option>2<sup> nd </sup> year (SEM-II)</option>
                        <option>3<sup> rd </sup> year (SEM-I)</option>
                        <option>3<sup> rd </sup> year (SEM-II)</option>
                        <option>4<sup> th </sup> year (SEM-I)</option>
                        <option>4<sup> th </sup> year (SEM-II)</option>
                    </select>
                </div>

            <div class="col-sm-3 form-group">
                <label>Assessment Name</label>
                <select name='aid' class="form-control" required><option value="">none</option>
                <?php
                
                $sql11="select * from assessments order by adate asc;";
                $resultt=mysqli_query($con,$sql11);
                while($row=mysqli_fetch_array($resultt))
                {
                ?>
                <option value="<?php echo $row['aid'];  ?>"> <?php echo $row['aname']." on <b>".$row['adate']."</b>"; ?> </option>

                <?php
                }
                ?>
                mysqli_close($con);
                ?>
                </select>
            </div>
            <div class="col-sm-2">
                <label>Obtained Marks</label>
                <input type="text" name="obtained1"  class="form-control"  required> 
            </div>
            <div class="col-sm-2">
                <label>Total Marks</label>
                <input type="text" name="total1" onkeyup="avg();" class="form-control" value="0" required> 
            </div>
                

            <div class="col-sm-2">
                <label>Marks Obtained</label>
                <input type="text" name="marks" class="form-control" readonly placeholder="in percentage" required> 
                </div>
                <div class="col-sm-1">
                <br>
                <input type="submit" value="Submit" class="btn btn-primary">
               </div>

                </form>
            </div>
                


            </div>

        </div>
       

        

        <div class=" cols-lg-12 cols-sm-6">
             
            <div class="col-lg-12 well">
                    <h3><b><font color="#5900b3">Assessment for Career Orientation</font></b></h3>
                    <div>
                       <center> <img src="images/riasec.jpg" alt="no image found" class="img img-circle rotates" ></center>
                    </div>
                    <br>
                    <p style="font-size:20px;"> In our culture, most people are one of six personality types:<b> Realistic, Investigative, Artistic, Social, Enterprising,</b> and <b>Conventional</b>. Some refer to these as  RIASEC.<br> To know about your self take this test....   <a target="new" href="riasec.php">click here</a> for test. After the completion of test fill the below form.</p>
                    <br>
                    <div class="col-sm-12">
                            <?php $s="select * from riasec where regno='$regno';";
                             $rr=mysqli_query($con,$s);
                             $roww=mysqli_fetch_array($rr);
                             if($roww['s1']!="")
                             {

                             ?>
                             <table class="table">
                                <caption><b>RIASEC Exam Result</b></caption>
                                <tr>
                                    <th>Interest Code 1 </th> <td><?php echo $roww['s1']; ?></td>
                                </tr>
                                <tr>
                                    <th>Interest Code 2 </th> <td><?php echo $roww['s2']; ?></td>
                                </tr>
                                <tr>
                                    <th>Interest Code 3 </th> <td><?php echo $roww['s3']; ?></td>
                                </tr>
                            </table>
                            <?php
                             } 
                            ?>



                    </div>
                    <form class="form-inline" action="updateriasec.php" method="POST">
                        <big><b>Enter your RIASEC Score</b></big><br><br>
                        <center> <label>Interest Code-1</label>
                        
                                     <?php
                                        $var = $roww['s1'];
                                        $arr = array("Realistic","Investigative","Artistic","Social","Enterprising","Conventional");
                                    ?>
                                        <select class="form-control" id="s1" name="s1" required>
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


                        <label>&nbsp&nbsp&nbsp&nbspInterest Code-2</label>
                        
                                     <?php
                                        $var = $roww['s2'];
                                        $arr = array("Realistic","Investigative","Artistic","Social","Enterprising","Conventional");
                                    ?>
                                        <select class="form-control" id="s2" name="s2" required>
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
                        <label>&nbsp&nbsp&nbsp&nbspInterest Code-3</label>
                        
                                     <?php
                                        $var = $roww['s3'];
                                        $arr = array("Realistic","Investigative","Artistic","Social","Enterprising","Conventional");
                                    ?>
                                        <select class="form-control" id="s3" name="s3" required>
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
                                        </select>&nbsp&nbsp
                        <input type="submit" value="submit" class="btn btn-primary"></form></center>
                        
            </div>

        </div>
     </div>
<?php mysqli_close($con); ?>
    </body>
</html>