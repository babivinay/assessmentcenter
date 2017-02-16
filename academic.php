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
        <script type="text/javascript">

        </script>
        <style>
        .zoom
        {
            zoom:85%;
        }
        </style>
        <script src="js/jsvalidation.js">        </script> 
    </head>
    <body>
        
        <?php
            error_reporting(0);
            session_start();
            if($_SESSION['valid']!='T')
            {
                include('login-check.php');
            }
            if($_SESSION['flag']=='0')
            {?>
                <script>
                        alert('please Upadate your profile before updating academic details.....'); 
                        window.location='register-form.php';
            </script><?php
            }
            $regno=$_SESSION['regno'];
            include('dataconnection.php');
            $sql="select * from marks where regno='$regno';";
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($res);
            $year=$_SESSION['year'];

        ?>
    <br>
    <form action="updateacadmics.php" method="POST" name="frm">
    <div class="container zoom">
    <div class="well well-lg"><div style="float:left"><big><font size="8px" face="Monotype Corsiva">ACADEMIC DETAILS</font></big></div><h4 align="right">Welcome <font color="green"><b><?php echo $_SESSION['name']."  -  ".$_SESSION['regno'] ?></b> </font>&nbsp&nbsp<a data-toggle="tooltip" title="home" href="userpage.php" ><big><span class="glyphicon glyphicon-home"></span></big></a>&nbsp&nbsp&nbsp<a data-toggle="tooltip" title="logout" href="logout.php" ><big><span class="glyphicon glyphicon-off"></span></big></a></h4></div>
    <div class=" cols-lg-12 cols-sm-6"><marquee scrolldelay="150"><font face="Lucida Handwriting"> <big>CENTER FOR LEARNING AND DEVELOPMENT , SRKR Engineering College - Bhimavaram</big></font></marquee></div>
    <div class="col-sm-12 well">
    <div class="col-sm-4 form-group">
    </div>
    <div class="col-sm-4 form-inline">
       
                <b><big>CGPA </big></b> :  <input type="text" name="cgpa" id="cgpa" readonly class="form-control" value="<?php echo $row['cgpa'];  ?>">  
    </div>

    </div>
    <div class="col-sm-12 well">
        
        <h3> <b>First Year Marks</b></h3>
        <div class="row">
            <div class="col-sm-2">
            <big><b><br>SEM-1</b></big>
            </div>
            <div class="col-sm-3 form-group">
                <label> Obtained Grade Points</label>
                <input type="text" required name="obtained1" id="obtained1" onkeyup="test();"  value="<?php echo $row['obtained1'];  ?>"  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> Total Credits</label>
                <input type="text" required name="total1" onkeyup="test();" id="total1" onblur="sgpa(1);"   value="<?php echo $row['total1'];  ?>"  class="form-control">
            </div>
            <div class="col-sm-1 form-group">
                <label> Backlogs</label>
                <input type="text" required name="b1" onkeyup="test();" value="<?php echo $row['b1'];  ?>" required onblur="backlog(1);"  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> SGPA</label>
                <input type="text" required name="f1" onkeyup="test();" value="<?php echo $row['f1'];  ?>" readonly required  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
            <big><b><br>SEM-2</b></big>
            </div>
            <div class="col-sm-3 form-group">
                <label> Obtained Grade Points</label>
                <input type="text" required name="obtained2" onkeyup="test();" id="obtained2" value="<?php echo $row['obtained2'];  ?>"  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> Total Credits</label>
                <input type="text" required name="total2" onkeyup="test();" id="total2" onblur="sgpa(2);" value="<?php echo $row['total2'];  ?>"  class="form-control">
            </div>
            <div class="col-sm-1 form-group">
                <label> Backlogs</label>
                <input type="text" required name="b2" onkeyup="test();" value="<?php echo $row['b2'];  ?>" required  onblur="backlog(2);" class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> SGPA</label>
                <input type="text" required name="f2" onkeyup="test();" value="<?php echo $row['f2'];  ?>" readonly   required  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                
            </div>
        </div>
    </div>

    <div class="col-sm-12 well">
        
        <h3> <b>Second Year Marks</b></h3>
        <div class="row">
            <div class="col-sm-2">
            <big><b><br>SEM-1</b></big>
            </div>
            <div class="col-sm-3 form-group">
                <label> Obtained Grade Points</label>
                <input type="text" required name="obtained3" onkeyup="test();" id="obtained3" value="<?php echo $row['obtained3'];  ?>"  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> Total Credits</label>
                <input type="text" required name="total3" onkeyup="test();" id="total3" onblur="sgpa(3);" value="<?php echo $row['total3'];  ?>"  class="form-control">
            </div>
            <div class="col-sm-1 form-group">
                <label> Backlogs</label>
                <input type="text" required name="b3" onkeyup="test();"  required onblur="backlog(3);" value="<?php echo $row['b3'];  ?>" class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> SGPA</label>
                <input type="text" required name="f3"  value="<?php echo $row['f3'];  ?>" readonly  required  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
            <big><b><br>SEM-2</b></big>
            </div>
            <div class="col-sm-3 form-group">
                <label> Obtained Grade Points</label>
                <input type="text" required name="obtained4" onkeyup="test();" id="obtained4" value="<?php echo $row['obtained4'];  ?>"   class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> Total Credits</label>
                <input type="text" required name="total4" onkeyup="test();" id="total4" onblur="sgpa(4);"  value="<?php echo $row['total4'];  ?>" class="form-control">
            </div>
            <div class="col-sm-1 form-group">
                <label> Backlogs</label>
                <input type="text" required name="b4" onkeyup="test();" value="<?php echo $row['b4'];  ?>" required onblur="backlog(4);"  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> SGPA</label>
                <input type="text" required name="f4" value="<?php echo $row['f4'];  ?>" readonly   required  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                
            </div>
        </div>
    </div>



    <div class="col-sm-12 well">
        
        <h3> <b>Third Year Marks</b></h3>
        <div class="row">
            <div class="col-sm-2">
            <big><b><br>SEM-1</b></big>
            </div>
            <div class="col-sm-3 form-group">
                <label> Obtained Grade Points</label>
                <input type="text" required name="obtained5" onkeyup="test();" id="obtained5"  value="<?php echo $row['obtained5'];  ?>" class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> Total Credits</label>
                <input type="text" required name="total5"  onkeyup="test();" id="total5" onblur="sgpa(5);" value="<?php echo $row['total5'];  ?>"  class="form-control">
            </div>
            <div class="col-sm-1 form-group">
                <label> Backlogs</label>
                <input type="text" required name="b5" onkeyup="test();" value="<?php echo $row['b5'];  ?>" required onblur="backlog(5);"  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> SGPA</label>
                <input type="text" required name="f5"  value="<?php echo $row['f5'];  ?>" readonly required  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
            <big><b><br>SEM-2</b></big>
            </div>
            <div class="col-sm-3 form-group">
                <label> Obtained Grade Points</label>
                <input type="text" required name="obtained6" onkeyup="test();" id="obtained6"  value="<?php echo $row['obtained6'];  ?>" class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> Total Credits</label>
                <input type="text" required name="total6" onkeyup="test();" id="total6" onblur="sgpa(6);" value="<?php echo $row['total6'];  ?>"  class="form-control">
            </div>
            <div class="col-sm-1 form-group">
                <label> Backlogs</label>
                <input type="text" required name="b6" onkeyup="test();" value="<?php echo $row['b6'];  ?>" required onblur="backlog(6);"  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> SGPA</label>
                <input type="text" required name="f6" value="<?php echo $row['f6'];  ?>" readonly   required  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                
            </div>
        </div>
    </div>

    <div class="col-sm-12 well">
        
        <h3> <b>Fourth Year Marks</b></h3>
        <div class="row">
            <div class="col-sm-2">
            <big><b><br>SEM-1</b></big>
            </div>
            <div class="col-sm-3 form-group">
                <label> Obtained Grade Points</label>
                <input type="text" required name="obtained7" onkeyup="test();" id="obtained7"  value="<?php echo $row['obtained7'];  ?>"  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> Total Credits</label>
                <input type="text" required name="total7" onkeyup="test();" id="total7" onblur="sgpa(7);" value="<?php echo $row['total7'];  ?>"   class="form-control">
            </div>
            <div class="col-sm-1 form-group">
                <label> Backlogs</label>
                <input type="text" required name="b7" onkeyup="test();" value="<?php echo $row['b7'];  ?>" required onblur="backlog(7);"  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> SGPA</label>
                <input type="text" required name="f7" value="<?php echo $row['f7'];  ?>"  readonly required  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
            <big><b><br>SEM-2</b></big>
            </div>
            <div class="col-sm-3 form-group">
                <label> Obtained Grade Points</label>
                <input type="text" required name="obtained8" onkeyup="test();" id="obtained8"  value="<?php echo $row['obtained8'];  ?>" class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> Total Credits</label>
                <input type="text" required name="total8" onkeyup="test();" id="total8" onblur="sgpa(8);"  value="<?php echo $row['total8'];  ?>" class="form-control">
            </div>
            <div class="col-sm-1 form-group">
                <label> Backlogs</label>
                <input type="text" required name="b8" onkeyup="test();" value="<?php echo $row['b8'];  ?>" required onblur="backlog(8);"   class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                <label> SGPA</label>
                <input type="text" required name="f8" value="<?php echo $row['f8'];  ?>" readonly   required  class="form-control">
            </div>
            <div class="col-sm-2 form-group">
                
            </div>
        </div>
    </div>

<center><button type="submit" class="btn btn-primary btn-lg">Submit</button></center>

        <!--<div class="col-sm-6">

            <table class="table table-hover table-responsive">
            <caption><b><big>Marks Details</big></b></caption>
            <tr>
                <th><label>First Year (sem-1) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="f1" value="<?php echo $row['f1'];  ?>" required></td>
            </tr>
            <tr>
                <th><label>First Year (sem-2) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="f2" required value="<?php echo $row['f2'];  ?>">
                <div class="col-sm-8">
                <label>Any Backlogs</label><input type="text"  name="fb" placeholder="No.of Backlogs" class="form-control" required value="<?php echo $row['fb']; ?>">
                </div>
                </td>
            </tr>
            <tr>
                <th><label>Second Year (sem-1) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control"   name="s1" required   <?php  if($year<2) echo "disabled"; else echo "value=".$row['s1'];  ?>></td>
            </tr>
            <tr>
                <th><label>Second Year (sem-2) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="s2" required <?php  if($year<2) echo "disabled"; else echo "value=".$row['s2'];  ?>>
                    <div class="col-sm-8">
                <label>Any Backlogs</label><input type="text"  name="sb" placeholder="No.of Backlogs" class="form-control" required <?php  if($year<2) echo "disabled"; else echo "value=".$row['sb'];   ?>>
                </div>
                </td>
            </tr>
            <tr>
                <th><label>Third Year (sem-1) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="t1" required  <?php  if($year<3) echo "disabled"; else echo "value=".$row['t1'];   ?>></td>
            </tr>
            <tr>
                <th><label>Third Year (sem-2) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="t2" required  <?php  if($year<3) echo "disabled"; else echo "value=".$row['t2'];   ?>>
                    <div class="col-sm-8">
                <label>Any Backlogs</label><input type="text"  name="tb" placeholder="No.of Backlogs" class="form-control" required <?php  if($year<3) echo "disabled"; else echo "value=".$row['tb'];   ?>>
                </div>
                </td>
            </tr>
            <tr>
                <th><label>Fourth Year (sem-1) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="fo1" required  <?php  if($year<4) echo "disabled"; else echo "value=".$row['fo1'];   ?>></td>
            </tr>
            <tr>
                <th><label>Fourth Year (sem-2) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="fo2" required  <?php  if($year<4) echo "disabled"; else echo "value=".$row['fo2'];   ?>>
                    

                </td>
            </tr>
            </table>
                 
             <?php
                $sql1="select * from att where regno='$regno';";
                $res1=mysqli_query($con,$sql1);
                $r=mysqli_fetch_array($res1);
             ?>               
                              
        </div>
         <div class="col-sm-6">
            <table class="table table-hover table-responsive">
            <caption><b><big>Attendance Details</big></b></caption>
            <tr>
                <th><label>First Year (sem-1) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="af1" value="<?php echo $r['af1'];  ?>" required></td>
            </tr>
            <tr>
                <th><label>First Year (sem-2) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="af2" value="<?php echo $r['af2'];  ?>" required></td>
            </tr>
            <tr>
                <th><label>Second Year (sem-1) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control"   name="as1" required <?php if($year<2) echo "disabled"; else echo "value=".$r['as1'];   ?>></td>
            </tr>
            <tr>
                <th><label>Second Year (sem-2) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="as2" required <?php if($year<2) echo "disabled"; else echo "value=".$r['as2']; ?>></td>
            </tr>
            <tr>
                <th><label>Third Year (sem-1) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="at1" required <?php if($year<3) echo "disabled"; else echo "value=".$r['at1']; ?>></td>
            </tr>
            <tr>
                <th><label>Third Year (sem-2) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="at2" required <?php if($year<3) echo "disabled"; else echo "value=".$r['at2']; ?>></td>
            </tr>
            <tr>
                <th><label>Fourth Year (sem-1) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="afo1" required <?php if($year<4) echo "disabled"; else echo "value=".$r['afo1'];  ?>></td>
            </tr>
            <tr>
                <th><label>Fourth Year (sem-2) <font color="red" > *</font> </label></th>
                <td><input type="text" class="form-control" name="afo2" required <?php if($year<4) echo "disabled"; else echo "value=".$r['afo2']; ?>></td>
            </tr>
            </table>
        </div>
             <font color="red" > *</font> mandatory fields.
                            <center><br><br><br><button type="submit" class="btn btn-lg btn-info ">Save & Continue</button> </center>
    </div> -->

    
    </form>
    <?php mysqli_close($con); ?>
</body>
</html>