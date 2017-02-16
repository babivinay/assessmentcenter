<html>
    <head>
        <title>Student info</title>
         <link rel="shortcut icon" href="images/learn-icon.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <style>
            .zoom
            {
                zoom:80%;
            }


            .style1
            {
                font-family:"Tahoma";
                font-size:25px;
            }
            .style2
            {
                font-family:"Verdana";
                font-size:18px;
            }
            .style3
            {
                padding-top: 0;
                padding-left: 0;
                padding-right: 0;
                padding-bottom: 0;
            }
            .break { 

                page-break-before: always;
                

                 }
            

        </style>
        <script type="text/javascript">



        function printDiv() {
             document.getElementById("pbutton").style.visibility = "hidden";
             

             window.print();

                  

             document.getElementById("pbutton").style.visibility = "visible";
             
        }



    </script>

    </head>
    <body>
    <?php
            session_start();
            if($_SESSION['valid']!='A')
            {
                include('login-check.php');
            }
            include('dataconnection.php');
            $regno=$_POST['regno'];
            $sql="select * from sdata where regno='$regno';";
            $res=mysqli_query($con,$sql);
            if($row=mysqli_fetch_array($res))
            {
            $year=$row['year'];


    
         $sql="select s.regno,s.name,s.lastname,s.age,s.mobile,s.gender,s.email,s.branch,s.year,s.section,s.sscper,s.interper,s.eamcetrank,m.f1 1_1,m.f2 1_2,m.f3 2_1,m.f4 2_2,m.f5 3_1,m.f6 3_2,m.f7 4_1,m.f8 4_2,m.b1 1styearbacklogs_sem1,m.b2 1styearbacklogs_sem2,m.b3 2ndyearbacklogs_sem1,m.b4 2ndyearbacklogs_sem2,m.b5 3rdyearbacklogs_sem1,m.b6 3rdyearbacklogs_sem2,m.b7 4thyearbacklogs_sem1,m.b8 4thyearbacklogs_sem2,r.s1 riasec_code1,r.s2 riasec_code2,r.s3 riasec_code3 from sdata s,marks m,att a,riasec r where ((s.regno=m.regno and s.regno=a.regno) and s.regno=r.regno) and s.regno='$regno' order by s.branch asc";

         ?>
    
    
    <div class="container"  style="width:740px;" >
    <br>
    <div class="">
        <div class="col-sm-12 well">
                
                        <center><span class="style1"><b>COUNSELLING & ASSESSMENT CENTER </b><br></span> </center>
                <center><span class="style2"> SRKR Engineering College - Bhimavaram</span></center>

                
        </div>
        <br>
        <div class="col-sm-12 well">
            
            <div class="col-sm-12">

                
                 <table border=0  class="table table-hover style3">
                    <caption><b><big>Student Profile</big></b></caption>
                    <tr>
                            <th>Register Number</th>
                            <td   align="center" valign="middle"><b><i><?php echo $row['regno'];  ?></i></b></td>
                            <td rowspan="5" align=center><img src="<?php echo $row['image'];  ?>" height=160px width=160px alt="no image found"  class="img img-circle" ></td>
                            
                    </tr>
                    
                    <tr>
                            <th>First Name </th>
                            <td align="center"><?php echo $row['name'];  ?></td>
                            
                    
                        
                    </tr>
                    <tr>
                            <th>Last Name </th>
                            <td align="center"><?php echo $row['lastname'];  ?></td>
                            
                    
                        
                    </tr>
                    <tr>
                            <th>Name (As per SSC)</th>
                            <td align="center"> <?php echo $row['sscname'];  ?></td>
                            
                    
                        
                    </tr>
                    <tr>
                            <th>Email Id</th>
                            <td align="center"> <?php echo $row['email'];  ?></td>
                            
                    
                        
                    </tr>
                    <tr>
                            <td colspan="2"><b>Mobile No : </b> <?php echo $row['mobile'];  ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Date of Birth : </b> <?php echo $row['dob'];  ?></td>
                            
                    
                        
                    </tr>
                    

                    
                    <tr>
                            
                            <td colspan="3"  align="center"><b>Gender : </b>  <?php echo $row['gender'];  ?>&nbsp&nbsp&nbsp<b>Year : </b><?php echo $row['year'];  ?> &nbsp <b>Branch : </b><?php echo $row['branch'];  ?> &nbsp <b>Section :</b>  <?php echo $row['section'];  ?> &nbsp&nbsp<b>Batch : </b><?php echo $row['batch']; ?> </td>

                            
                    
                        
                    </tr>
                    <tr>
                        <table class="table table-hover table-bordered">
                            <tr>
                                    <td align="center"><b>SSC Percentage</b></td><td align="center"><b>
                
                                    <?php
                                    if($row['admissiontype']=='ECET')
                                        echo "Diploma Percentage";
                                    else if($row['admissiontype']=='PGCET')
                                        echo "UG Percentage";
                                    else
                                        echo "Inter Percentage";
                                   

                                    ?>

                                    </b></td><td align="center"><b><?php if($row['admissiontype']=='NRI')
                                                                        echo "Admission Type";
                                                                        else
                                                                            echo $row['admissiontype']." Rank";
                                     ;  ?></b></td>
                            </tr>
                            <tr>
                                    <td align=center><?php echo $row['sscper']; ?></td>
                                    <td align=center><?php echo $row['interper']; ?></td>
                                    <td align=center><?php 
                                            if($row['admissiontype']=='NRI')
                                                echo 'NRI';
                                            else
                                                echo $row['eamcetrank'];


                                     ?></td>

                            </tr>
                        </table>

                    </tr>
                    <tr>
                    <div style="line-height: 2;">
                    <div class="col-sm-12 col-xs-12">
                    <b>SSC School Details: </b><?php echo $row['sscschool']." ( ".$row['sscpassyear']." )"; ?> 
                    </div>
                    <div class="col-sm-12 col-xs-12">
                    <b><?php
                                    if($row['admissiontype']=='ECET')
                                        echo "Diploma Details : ";
                                    else
                                        echo "Inter Details : ";

                                    ?></b><?php echo $row['intername']." ( ".$row['interpassyear']." )"; ?> <br><br>
                    </div>
                    
                    </div>
                    </tr>

                    <tr>
                    <td colspan="2" >
                        <div class="col-sm-7 col-xs-7" style="line-height: 2;">
                        <b>Father Name : </b><?php  echo $row['fname']; ?><br>
                            <b>Mother Name : </b><?php  echo $row['mname']; ?>

                        </div>
                        <div class="col-sm-5 col-xs-5" style="line-height: 2;">
                         <b>Parent Occupation : </b><?php  echo $row['foccupation']; ?><br> <b>Parent Mobile No : </b><?php  echo $row['fmobile']; ?></div>

                    </tr>
                    <tr>
                    <div style="line-height: 2;">
                    <div class="col-sm-7 col-xs-7">
                    <b>Student Aadhar Number : </b><?php echo $row['aadhar']; ?> 
                    </div>
                    <div class="col-sm-5 col-xs-5">
                    <b>Caste : </b> <?php echo $row['caste']." ( ".$row['subcaste']." )"; ?>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                    <b>Gap In Academics : </b> <?php
                        if($row['gap']=="no")
                            echo "No";
                        else
                            echo "Yes - ".$row['gapreason'];

                    ?>
                    </div>
                    </div>
                    </tr>
                    <tr>
                    <?php
                    $s="select * from marks where regno='$regno';";
                    $re=mysqli_query($con,$s);
                    $rr=mysqli_fetch_array($re);
                    ?>
                        <table class="table table-bordered" >
                        <caption><b>Marks Details</b></caption>
                        <tr>
                            <th>Sem/Year</th>
                            <th>1<sup> st </sup> Year</th>
                            <th>2<sup> nd </sup> Year</th>
                            <th>3<sup> rd </sup> Year</th>
                            <th>4<sup> th </sup> Year</th>
                        </tr>
                        <tr>
                        <th>Sem-1</th>
                        <td><?php echo $rr['f1']." ( ".$rr['b1']." )"; ?> </td>
                        <td><?php echo $rr['f2']." ( ".$rr['b2']." )"; ?> </td>
                        <td><?php echo $rr['f3']." ( ".$rr['b3']." )"; ?> </td>
                        <td><?php echo $rr['f4']." ( ".$rr['b4']." )"; ?> </td>
                        
                        </tr>
                        <tr>
                        <th>Sem-2</th>
                        <td><?php echo $rr['f5']." ( ".$rr['b5']." )"; ?> </td>
                        <td><?php echo $rr['f6']." ( ".$rr['b6']." )"; ?> </td>
                        <td><?php echo $rr['f7']." ( ".$rr['b7']." )"; ?> </td>
                        <td><?php echo $rr['f8']." ( ".$rr['b8']." )"; ?> </td>
                        
                        </tr>
                        <tr>
                        <td colspan="5" align="center">
                        <b>CGPA</b> <?php echo $rr['cgpa']; ?>
                        </td>
                        </tr>

                        </table>
                        
                    </tr>
                    

                </table> 
            </div>
            
        </div>
        </div>
        
        <?php if($year<=3) echo "<br><br>";  ?>
        <div class="col-sm-12 well break" style="page-break-before: always;" >

        <div class="col-sm-12 ">
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
                                <tr>
                                    <th>Language Skills rating (self)</th>
                                    <td><?php echo $row['langskillsrate']; ?> </td>
                                </tr>
                                <tr>
                                    <th>Writing Skills rating (self)</th>
                                    <td><?php echo $row['writeskillsrate']; ?> </td>
                                </tr>

                                
                            </table>
                            <?php
                             } 
                            ?>



                    </div>

                    <!--
                    <div class="col-sm-12 ">

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

                        </div>-->

                <div class="col-sm-12" style="text-align: justify;text-justify: inter-word;">
                <b><big>TAT Script</big></b><br>
                <?php $sqll="select * from tat where regno='$regno'";
                $ress=mysqli_query($con,$sqll);
                $row=mysqli_fetch_array($ress);
                echo $row['tatdata'];
                 ?>


                </div>

                <div class="col-sm-12">
                        <?php
                            $sss="select * from tatscores where regno='$regno'; ";
                            $ress=mysqli_query($con,$sss);
                            if($rr=mysqli_fetch_array($ress))
                            {
                        ?>
                <br>
                <table class="table table-hover table-bordered" style="text-align:center;">
                <caption><b><big>TAT Scores</big></b></caption>
                <tr>
                    <th>LIWC dimension</th>
                    <th>Your data</th>
                    <th>Male Average</th>
                    <th>Female Average</th>
                </tr>
                <tr>
                    <th>Need for Achievement</th>
                    <td><?php echo $rr['ac1']; ?></td>
                    <td><?php echo $rr['ac2']; ?></td>
                    <td><?php echo $rr['ac3']; ?></td>
                    
                </tr>
                <tr>
                    <th>Need for Affiliation</th>
                    <td><?php echo $rr['af1']; ?></td>
                    <td><?php echo $rr['af2']; ?></td>
                    <td><?php echo $rr['af3']; ?></td>
                    
                </tr>
                <tr>
                    <th>Need for power</th>
                    <td><?php echo $rr['po1']; ?></td>
                    <td><?php echo $rr['po2']; ?></td>
                    <td><?php echo $rr['po3']; ?></td>
                </tr>
                <tr>
                    <th>Self-references (I, me, my)</th>
                    <td><?php echo $rr['sr1']; ?></td>
                    <td><?php echo $rr['sr2']; ?></td>
                    <td><?php echo $rr['sr3']; ?></td>
                </tr>
                <tr>
                    <th>Social words</th>
                    <td><?php echo $rr['so1']; ?></td>
                    <td><?php echo $rr['so2']; ?></td>
                    <td><?php echo $rr['so3']; ?></td>
                </tr>
                <tr>
                    <th>Positive emotions</th>
                    <td><?php echo $rr['pos1']; ?></td>
                    <td><?php echo $rr['pos2']; ?></td>
                    <td><?php echo $rr['pos3']; ?></td>
                </tr>
                <tr>
                    <th>Negative emotions</th>
                    <td><?php echo $rr['neg1']; ?></td>
                    <td><?php echo $rr['neg2']; ?></td>
                    <td><?php echo $rr['neg3']; ?></td>
                </tr>
                <tr>
                    <th>Big words (> 6 letters)</th>
                    <td><?php echo $rr['big1']; ?></td>
                    <td><?php echo $rr['big2']; ?></td>
                    <td><?php echo $rr['big3']; ?></td>
                </tr>
                

                    </table>
                    <?php } ?>

                </div>
            </div>
            <div class="col-sm-12 well" style="page-break-before: always;">
                <div class="">
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
                </div>
            

                <div class="col-sm-12 col-xs-12">

                <div class="col-sm-6 col-xs-6" style="border:1px solid black;font-size:12px;">
                <b><font color="#1CC2F2"><big> Realistic</big></font></b><br><br>
                    <p>These people are often good at mechanical or athletic
                        jobs. Good college majors for Realistic people are...</p>
                <div  style="float:left;font-size:10px;line-height: 2;">
               
                    -> Agriculture<br>
                    -> Health Assistant<br>
                    -> Computers<br>
                    -> Construction<br>
                    -> Mechanic/Machinist<br>
                    -> Engineering<br>
                    -> Food and Hospitality<br>
                
                </div>
                <div  style="float:right;font-size:10px;line-height: 2; border:0.5px solid black;background-color: lightgrey;">
                    <div style="background-color: grey;color:white;"><b><big>Related Pathways</big></b></div>
                    
                    Natural Resources<br>
                    Health Services<br>
                    Industrial and Engineering Technology<br>
                    Arts and Communication<br>
                
                </div>
                </div>
                <div class="col-sm-6 col-xs-6" style=" border:1px solid black;font-size:12px;">
                <b><font color="#1CC2F2"><big> Social</big></font></b><br><br>
                    <p>These people like to work with other people,
          rather than things. Good college majors for
          Social people are...</p>
                <div  style="float:left;font-size:10px;line-height: 2;">
               
                    -> Counseling<br>
                    -> Nursing<br>
                    -> Physical Therapy<br>
                    -> Travel<br>
                    -> Advertising<br>
                    -> Public Relations<br>
                    -> Education<br>
                
                </div>
                <div  style="float:right;font-size:10px;line-height: 2; border:0.5px solid black;background-color: lightgrey;">
                    <div style="background-color: grey;color:white;"><b><big>Related Pathways</big></b></div>
                    
                    Health Services<br>
                    Public and Human Services<br>
                   
                
                </div>
                </div>


                </div>



                <div class="col-sm-12 col-xs-12">
                        <br>
                <div class="col-sm-6 col-xs-6" style="border:1px solid black;font-size:12px;">
                <b><font color="#1CC2F2"><big> Investigative</big></font></b><br><br>
                    <p>These people like to watch, learn, analyze and solve problems. Good college majors for Investigative people are...</p>
                <div  style="float:left;font-size:10px;line-height: 2;">
               
                    -> Marine Biology<br>
                    -> Engineering<br>
                    -> Chemistry<br>
                    -> Zoology<br>
                    -> Medical Surgery<br>
                    -> Economics<br>
                    -> Psychology<br>
                
                </div>
                <div  style="float:right;font-size:10px;line-height: 2; border:0.5px solid black;background-color: lightgrey;">
                    <div style="background-color: grey;color:white;"><b><big>Related Pathways</big></b></div>
                    
                    Business<br>
                    Health Services<br>
                    Public and Human Services<br>
                    Industrial and Engineering Technology<br>
                
                </div>
                </div>
                <div class="col-sm-6 col-xs-6" style=" border:1px solid black;font-size:12px;">
                <b><font color="#1CC2F2"><big> Enterprising</big></font></b><br><br>
                    <p>These people like to work with others and enjoy
          persuading and performing. Good college majors
          for Enterprising people are...</p>
                <div  style="float:left;font-size:10px;line-height: 2;">
               
                    -> Fashion Merchandising<br>
                    -> Real Estate<br>
                    -> Marketing / Sales<br>
                    -> Law<br>
                    -> Political Sciences<br>
                    -> International Trade<br>
                    -> Banking/Finance<br>
                
                </div>
                <div  style="float:right;font-size:10px;line-height: 2; border:0.5px solid black;background-color: lightgrey;">
                    <div style="background-color: grey;color:white;"><b><big>Related Pathways</big></b></div>
                    
                    Business<br>
                    Public and Human Services<br>

                    Arts and Communication                   
                
                </div>
                </div>


                </div>


                <div class="col-sm-12 col-xs-12">
                <br>
                <div class="col-sm-6 col-xs-6" style="border:1px solid black;font-size:12px;">
                <b><font color="#1CC2F2"><big> Artistic</big></font></b><br><br>
                    <p>These people like to work in unstructured situations
          where they can use their creativity. Good majors for
          Artistic people are...</p>
                <div  style="float:left;font-size:10px;line-height: 2;">
               
                    -> Communication<br>
                    -> Cosmetology<br>
                    -> Performing Arts<br>
                    -> Photography<br>
                    -> Radio and TV<br>
                    -> Interior Design<br>
                    -> Architecture<br>
                
                </div>
                <div  style="float:right;font-size:10px;line-height: 2; border:0.5px solid black;background-color: lightgrey;">
                    <div style="background-color: grey;color:white;"><b><big>Related Pathways</big></b></div>
                    
                    
                    Public and Human Services<br>
                    Arts and Communication<br>
                
                </div>
                </div>
                <div class="col-sm-6 col-xs-6" style=" border:1px solid black;font-size:12px;">
                <b><font color="#1CC2F2"><big> Conventional</big></font></b><br><br>
                    <p>These people are very detail oriented,organized
          and like to work with data. Good college majors
          for Conventional people are...</p>
                <div  style="float:left;font-size:10px;line-height: 2;">
               
                    -> Accounting<br>
                    -> Court Reporting<br>
                    -> Insurance<br>
                    -> Law<br>
                    -> Administration<br>
                    -> Medical Records<br>
                    -> Banking<br>
                
                </div>
                <div  style="float:right;font-size:10px;line-height: 2; border:0.5px solid black;background-color: lightgrey;">
                    <div style="background-color: grey;color:white;"><b><big>Related Pathways</big></b></div>
                    
                    Health Services<br>
                    Business<br>

                    Industrial and Engineering Technology                   
                
                </div>
                </div>
                <br>
                *Above are the 6 Categories of RIASEC. You can choose your path based on your Result..
                </div>


            </div>

            <div class="col-sm-12 well" style="page-break-before: always;">
                <div class="">
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
                            <table class="table table-hover table-bordered">
                            <caption><b><big>Assessments Details</big></b></caption>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Assessment Name</th>
                                    <th>Date</th>
                                    <th>Year</th>
                                    <th>Marks (%)</th>
                                    
                                    
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
                        
                         </td>
                    </tr>

                    <?php
                    $k=$k+1;
                }


                    ?>
                </table>

                    </div>
             </div>
            <div class="col-sm-12 well break">
            <div class=" ">
            <?php
                $sql="select * from crt c,scrt s where c.cid=s.cid and regno='$regno' order by year asc;";
                $re=mysqli_query($con,$sql);
                $flag=0;
                $k=1;
                while($row=mysqli_fetch_array($re))
                {
                    if($flag==0)
                    {
                        $flag=1;
                        ?>
                            <table class="table table-hover table-bordered">
                            <caption><b><big> CRT Classes Details</big></b></caption>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Class Name</th>
                                    <th>Date</th>
                                    <th>Year</th>
                                    
                                    <th>Marks(%)</th>
                                    
                                    
                                </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $row['cdate']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        
                        
                        <td><?php echo $row['marks']." %"; ?></td>
                       
                         </td>
                    </tr>

                    <?php
                    $k=$k+1;
                }


            ?>
            </table>

            </div>
            </div>





            




            

            

    </div>
    
            
            


<center><button class="btn btn-info btn-lg" id="pbutton" onclick="printDiv()"><b>Print</b></button> </center>
<br><br>
<br><br>
<?php mysqli_close($con); ?>
<?php } 
else
{
    ?>

<script type="text/javascript">
    alert("Student details not found");
    window.location="adminpage.php";
</script>

</script>
<?php } ?>
    </body>
</html>