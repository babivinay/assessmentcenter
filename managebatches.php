<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link rel="shortcut icon" href="images/learn-icon.png" type="image/png">
        
        <script type="text/javascript">
        	$('.dropdown-toggle').dropdown();

        	$(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip(); 
            });
        </script>
    </head>
    <body>
    <div class="container">
    <?php include('adminheader.php'); ?>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-12 well">
    <?php
    	
    	
                $sql="select * from batch;";
                $re=mysqli_query($con,$sql);
                $flag=0;
                $s=1;
                while($row=mysqli_fetch_array($re))
                {
                	
                    if($flag==0)
                    {
                        $flag=1;
                        ?>
                            <table class="table table-hover">
                            <caption><b><big>Batches Details</big></b></caption>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Batch name</th>

                                    <th><center>download </center></th>
                                </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td><?php echo $s;  ?></td>
                        <td><?php echo $row['batchname'];
                        	$batch=$row['batchname']; 

                                   	
                                  



                        ?></td>
                        
                        
                         <td align="center">
                         
                         <?php
                         $sql11="select s.regno,s.name,s.lastname,s.age,s.mobile,s.gender,s.email,s.branch,s.year,s.section,s.sscper,s.interper,s.eamcetrank,s.batch,s.sscname,s.fname FatherName,s.aincome AnnualIncome,s.fmobile,s.mname MotherName,s.mmaidenname MotherMaidenName,s.rmobile parentno,s.pcode Pincode,s.dob DateofBirth,s.sscschool,s.sscpassyear,s.intername,s.interpassyear,s.admissiontype,s.gap,s.gapreason,s.caste,s.subcaste,s.reservation,s.religion,s.bgroup BloodGroup,s.ph PhysicallyHandicapped,m.f1 1_1,m.f2 1_2,m.f3 2_1,m.f4 2_2,m.f5 3_1,m.f6 3_2,m.f7 4_1,m.f8 4_2,m.b1 1styearbacklogs_sem1,m.b2 1styearbacklogs_sem2,m.b3 2ndyearbacklogs_sem1,m.b4 2ndyearbacklogs_sem2,m.b5 3rdyearbacklogs_sem1,m.b6 3rdyearbacklogs_sem2,m.b7 4thyearbacklogs_sem1,m.b8 4thyearbacklogs_sem2,r.s1 riasec_code1,r.s2 riasec_code2,r.s3 riasec_code3 from sdata s,marks m,att a,riasec r where ((s.regno=m.regno and s.regno=a.regno) and s.regno=r.regno) and s.batch='$batch' order by s.branch asc";

                         ?>

                         <a class="btn btn-info" data-toggle="tooltip" title="update" href="excelconversion.php?value=<?php echo $sql11; ?> ">download</a>&nbsp&nbsp&nbsp&nbsp&nbsp

                         
                         </td>
                    </tr>

                    <?php
                    $s=$s+1;
                }


            ?>
            


        </table>
        </div>
        
       <div class="col-sm-12 well">
       <form action="adminaddbatch.php" method="POST" class="form-inline">
           <center> <b>Add New Batch Here</b><br><br>
            <label>Batch Name :</label>
                <input type="text" name="batchname" class="form-control" required>
           <input type="submit" class="btn btn-primary" value="Add"></center>
            </form>
            </center>
       </div>
       </div>

    <?php mysqli_close($con); ?>        
   </body>
</html>