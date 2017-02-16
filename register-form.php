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
            function p(data)
            {
                if(data=="no")
                {
                    document.getElementById("gapreason").disabled = true;
                }
                if(data=="yes")
                {
                    
                    document.getElementById("gapreason").disabled = false;
                }

            }

            
        </script>
        <style>
            .zoom
            {
                zoom:90%;
            }
        </style>
    </head>
    <body>
        
        <?php
            error_reporting(0);
            session_start();
            if($_SESSION['valid']!='T')
            {
                include('login-check.php');
            }
            $regno=$_SESSION['regno'];
            include('dataconnection.php');
            $sql="select * from sdata where regno='$regno';";
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($res);


        ?>
    <br>
    <div class="container zoom">
    <div class="well well-lg"><div style="float:left"><big><font size="8px" face="Monotype Corsiva">PERSONAL DETAILS</font></big></div><h4 align="right">Welcome <font color="green"><b><?php echo $_SESSION['name']."  -  ".$_SESSION['regno'] ?></b> </font>&nbsp&nbsp<a data-toggle="tooltip" title="home" href="userpage.php" ><big><span class="glyphicon glyphicon-home"></span></big></a>&nbsp&nbsp&nbsp<a data-toggle="tooltip" title="logout" href="logout.php" ><big><span class="glyphicon glyphicon-off"></span></big></a></h4></div>
    <div class=" cols-lg-12 cols-sm-6"><marquee scrolldelay="150"><font face="Lucida Handwriting"> <big>CENTER FOR LEARNING AND DEVELOPMENT , SRKR Engineering College - Bhimavaram</big></font></marquee></div>
    <div class="col-lg-12 well">
    <div class="row">
                <form action="registerdata.php" method="post" enctype="multipart/form-data" >
                    <div class="col-sm-12">
                        <div class="row">
                            
                            <div class="col-sm-1 form-group">


                                     <label>Title  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['title'];
                                        $arr = array("Mr","Miss","Mrs");
                                    ?>
                                        <select class="form-control" id="title" name="title" required>
                                            <option value="" selected></option>
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
                                </div>


                            <div class="col-sm-3 form-group">
                                <label>First Name <font color="red" > *</font> </label>
                                <input type="text" required placeholder="Enter First Name Here.." value="<?php echo $row['name'];  ?>" class="form-control" name="name">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Last Name</label>
                                <input type="text" placeholder="Enter Last Name Here.." class="form-control" value="<?php echo $row['lastname'];  ?>" name="last-name">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Mobile Number <font color="red" > *</font></label>
                                <input type="text" required  placeholder="Enter Mobile Number Here.." value="<?php echo $row['mobile'];  ?>" class="form-control" name="mobile">
                            </div>
                        </div> 
                        <div class="row">
                        <div class="col-sm-4 form-group">
                                <label>Name (As per SSC)  <font color="red" > *</font></label>
                                <input type="text" required placeholder="Enter name here"  class="form-control" name="sscname" value="<?php echo $row['sscname'];  ?>">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Email Id  <font color="red" > *</font></label>
                                <input type="email" required placeholder="Enter email Here.." value="<?php echo $row['email'];  ?>" class="form-control" name="email">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Date of Birth  <font color="red" > *</font></label>
                                <input type="date" required  class="form-control"  name="dob" value="<?php echo $row['dob'];  ?>">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Aadhar Number  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control"  name="aadhar" value="<?php echo $row['aadhar'];  ?>">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-4 form-group">
                                <label>Father Name  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control"  name="fname" value="<?php echo $row['fname'];  ?>">
                            </div>
                         <div class="col-sm-3 form-group">
                                <label>Parent Number <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="fmobile" value="<?php echo $row['fmobile'];  ?>">
                            </div>
                        <div class="col-sm-3 form-group">
                                <label>Father Occupation  <font color="red" > *</font></label>
                                <input type="text" required placeholder="Enter Father Occupation Here.." class="form-control" value="<?php echo $row['foccupation'];  ?>" name="foccupation">
                            </div>
                        <div class="col-sm-2 form-group">
                                <label>Annual Income  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="aincome" value="<?php echo $row['aincome'];  ?>">
                            </div>
                            
                            
                        </div>
                        <div class="row">
                         <div class="col-sm-4 form-group">
                                <label>Mother Name <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="mname" value="<?php echo $row['mname'];  ?>">
                            </div>
                        <div class="col-sm-4 form-group">
                                <label>Mother's Maiden Name  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control"  name="mmaidenname" value="<?php echo $row['mmaidenname'];  ?>">
                            </div>
                        <div class="col-sm-4 form-group">
                                <label>Residence Phone  </label>
                                <input type="text"   class="form-control" name="rmobile" value="<?php echo $row['rmobile'];  ?>">
                            </div>
                            
                            
                        </div>

                        <div class="row">
                         <div class="col-sm-4 form-group">
                                <label>District</label>
                                <input type="text"  class="form-control" name="district" value="<?php echo $row['district'];  ?>">
                            </div>
                        <div class="col-sm-4 form-group">
                                <label>Postal Code  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control"  name="pcode" value="<?php echo $row['pcode'];  ?>">
                            </div>
                        

                        <div class="col-sm-4 form-group">


                                     <label>Nationality  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['nationality'];
                                        $arr = array("Indian","Foreigner");
                                    ?>
                                        <select class="form-control" id="nationality" name="nationality" required>
                                            <option value="" selected>None</option>
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
                                </div>
                            
                            
                        </div>


                        <div class="row">

                            <div class="col-sm-2 form-group">
                            <label>Gender  <font color="red" > *</font></label>
                                <div class="radio">
                                <?php
                                if($row['gender']=="Male")
                                {
                                    ?>
                                     <label><input type="radio" name="gender" value="Male" checked required><b>Male</b></label>
                                    &nbsp&nbsp&nbsp
                                     <label><input type="radio" name="gender" value="Female" required><b>Female</b></label>
                                <?php
                                }
                                else if($row['gender']=="Female")
                                {
                                ?>
                                 <label><input type="radio" name="gender" value="Male"  required><b>Male</b></label>
                                    &nbsp&nbsp&nbsp
                                     <label><input type="radio" name="gender" value="Female" checked required><b>Female</b></label>
                                <?php
                                }
                                else
                                {
                                ?>
                                 <label><input type="radio" name="gender" value="Male"  required><b>Male</b></label>
                                    &nbsp&nbsp&nbsp
                                     <label><input type="radio" name="gender" value="Female" required><b>Female</b></label>
                                <?php
                                }
                                ?>
                                </div>
                            </div>
                           <div class="col-sm-3 form-group">
                                <div class="form-group">

                                    <label>Batch Year</label>
                                     <select name='batch' class="form-control" required><option value="">none</option>
                                        <?php
                                        
                                        $sql11="select * from batch order by bid asc;";
                                        $resultt=mysqli_query($con,$sql11);
                                        while($roww=mysqli_fetch_array($resultt))
                                        {
                                        ?>
                                        <option value="<?php echo $roww['batchname'];  ?>"> <?php echo $roww['batchname']; ?> </option>

                                        <?php
                                        }
                                        ?>
                                        mysqli_close($con);
                                        ?>
                                        </select>
                                </div>
                            </div>

                            <div class="col-sm-5 form-group">
                                <div class="form-group">


                                     <label>Type  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['atype'];
                                        $arr = array("Hostel","Day-Scholar");
                                    ?>
                                        <select class="form-control" id="type" name="type" required>
                                            <option value="" selected>None</option>
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
                                </div>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Age  <font color="red" > *</font></label>
                                <input type="text" required name="age" value="<?php echo $row['age'];  ?>" placeholder="Enter Your Age Here.." class="form-control">
                            </div>
                        </div>
                                            
                                          
                          
                        <div class="row">
                            <div class="col-sm-2 form-group">
                                <div class="form-group">
                                     <label>Branch  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['branch'];
                                        $arr = array("CSE","ECE","EEE","IT","CIVIL","MECH");
                                    ?>
                                        <select class="form-control" id="branch"  name="branch" required>

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
                                </div>
                            </div>  
                            <div class="col-sm-2 form-group">
                                <label>Section  <font color="red" > *</font></label>
                                <input type="text" required name="section" value="<?php echo $row['section'];  ?>" placeholder="Enter Single Letter" class="form-control">
                            </div>
                            <div class="col-sm-2 form-group">
                                <div class="form-group">
                                     <label>Year  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['year'];
                                        $arr = array("1styear","2ndyear","3rdyear","4thyear");
                                    ?>
                                        <select class="form-control" id="year" name="year" required>
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
                                </div>
                            </div>
                            
                            <div class="col-sm-2 form-group">


                                     <label>Caste  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['caste'];
                                        $arr = array("OC","BC-A","BC-B","BC-C","BC-D","SC","ST","other");
                                    ?>
                                        <select class="form-control" id="caste" name="caste" required>
                                            <option value="" selected>None</option>
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
                                </div>




                            <div class="col-sm-2 form-group">
                                <label>Sub-Caste  <font color="red" > *</font></label>
                                <input type="text" required name="subcaste" required class="form-control" value="<?php echo $row['subcaste'];  ?>">
                            </div>
                            

                            <div class="col-sm-2 form-group">


                                     <label>Reservation  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['reservation'];
                                        $arr = array("Yes","No");
                                    ?>
                                        <select class="form-control" id="reservation" name="reservation" required>
                                            <option value="" selected>None</option>
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
                                </div> 
                                  
                        </div>
                        <div class="row">
                        

                            <div class="col-sm-3 form-group">


                                     <label>Admission Type  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['admissiontype'];
                                        $arr = array("EAMCET","ECET","PGCET","NRI","Other");
                                    ?>
                                        <select class="form-control" id="admissiontype" name="admissiontype" required>
                                            <option value="" selected>None</option>
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
                                </div>


                            


                            <div class="col-sm-3 form-group">


                                     <label>Religion  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['religion'];
                                        $arr = array("Hindu","Muslim","Christian","Jain","Sikh","Buddhist","Other");
                                    ?>
                                        <select class="form-control" id="religion" name="religion" required>
                                            <option value="" selected>None</option>
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
                                </div>


                                <div class="col-sm-3 form-group">


                                     <label>Blood Group  </label>
                                     <?php
                                        $var = $row['bgroup'];
                                        $arr = array("O+ve","O-ve","A+ve","A-ve","B+ve","B-ve","AB+ve","AB-ve","Other");
                                    ?>
                                        <select class="form-control" id="bgroup" name="bgroup">
                                            <option value="" selected>None</option>
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
                                </div>

                            <div class="col-sm-3 form-group">


                                     <label>Is PH  <font color="red" > *</font></label>
                                     <?php
                                        $var = $row['ph'];
                                        $arr = array("Yes","No");
                                    ?>
                                        <select class="form-control" id="ph" name="ph" required>
                                            <option value="" selected>None</option>
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
                                </div>   
                        </div>

                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>SSC School Name & Place <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="sscschool" value="<?php echo $row['sscschool'];  ?>" >
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>SSC Pass Year  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="sscpassyear" value="<?php echo $row['sscpassyear'];  ?>" >
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Inter / Diploma College Name & Place <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="intername" value="<?php echo $row['intername'];  ?>" >
                            </div>
                            <div class="col-sm-2 form-group">
                                <label> Pass Year  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="interpassyear" value="<?php echo $row['interpassyear'];  ?>">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>SSC Percentage  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="sscper" value="<?php echo $row['sscper'];  ?>">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Inter/Diploma Percentage  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="interper" value="<?php echo $row['interper'];  ?>">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>EAMCET/ECET Rank  <font color="red" > *</font></label>
                                <input type="text" required  class="form-control" name="rank" value="<?php echo $row['eamcetrank'];  ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 form-group">
                                <label>Gap in Acadmics</label><br>
                                <input type="radio" name="gap" required value="yes" onchange="p(this.value);"> Yes &nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gap" required value="no" onchange="p(this.value);"> No 
                            </div>
                            <div class="col-sm-10 form-group">
                                <label>Reason for Gap In Acadmics</label>
                                <input type="text" name="gapreason" id="gapreason" placeholder="Enter Your Reason Here." class="form-control">
                            </div>
                        </div>
                        
                            <font color="red" > *</font> mandatory fields.
                            <center><button type="submit" class="btn btn-lg btn-info">Save & Continue</button> </center>                  
                    </div>
                </div>
            </form> 
        </div>
    </div>
    </div>
<?php mysqli_close($con); ?>
    </body>
</html>