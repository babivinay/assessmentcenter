<html>
	<head>
		<title>Students Details</title>
		<link rel="shortcut icon" href="images/learn-icon.png" type="image/png">
	</head>
	<body>
		<?php  
		$sql="select s.regno,s.name,s.lastname,s.age,s.mobile,s.gender,s.email,s.branch,s.year,s.section,s.sscper,s.interper,s.eamcetrank,s.batch,s.sscname,s.fname FatherName,s.aincome AnnualIncome,s.fmobile,s.mname MotherName,s.mmaidenname MotherMaidenName,s.rmobile parentno,s.pcode Pincode,s.dob DateofBirth,s.sscschool,s.sscpassyear,s.intername,s.interpassyear,s.admissiontype,s.gap,s.gapreason,s.caste,s.subcaste,s.reservation,s.religion,s.bgroup BloodGroup,s.ph PhysicallyHandicapped,m.f1 1_1,m.f2 1_2,m.f3 2_1,m.f4 2_2,m.f5 3_1,m.f6 3_2,m.f7 4_1,m.f8 4_2,m.b1 1styearbacklogs_sem1,m.b2 1styearbacklogs_sem2,m.b3 2ndyearbacklogs_sem1,m.b4 2ndyearbacklogs_sem2,m.b5 3rdyearbacklogs_sem1,m.b6 3rdyearbacklogs_sem2,m.b7 4thyearbacklogs_sem1,m.b8 4thyearbacklogs_sem2,r.s1 riasec_code1,r.s2 riasec_code2,r.s3 riasec_code3 from sdata s,marks m,att a,riasec r where (s.regno=m.regno and s.regno=a.regno) and s.regno=r.regno order by s.branch asc";

		$sql1="select * from riasec order by regno;";

		$sql2="select regno,ac1 needforachievment1,ac2 needforachievement2,ac3 needforachievement3,af1 needforaffliation,af2 needforaffliation,af3 needforaffliation,po1 needforpower1,po2 needforpower2,po3 needforpower3,sr1 selfreferences1,sr2 selfreferences2,sr3 selfreferences3,so1 socialwords1,so2 socialwords2,so3 socialwords3,pos1 postivewords1,pos2 positivewords2,pos3 positivewords3,neg1 negativewords1,neg2 negativewords2,neg3 negativewords3,big1 bigwords1,big2 bigwords2,big3 bigwords3 from tatscores";

		$sql3="select regno,avg(marks) from fassessment group by(regno);";

		$sql4="select regno,avg(marks) from scrt group by(regno);";

		$sql5="select regno,purpose,i1 interest1,i2 interest2,i3 interest3,im1 improvement1,im2 improvement2,im3 improvement3,crate communicationrating,cm1 commimprovement1,cm2 commimprovement2,cm3 commimprovement3,langskillsrate,writeskillsrate from sdiscovery;";


		?>
		<div class="container">	
		<?php include('adminheader.php');  ?>
			<div class="col-sm-12 well">
			<div class="col-sm-2"><center>
			<a  href="excelconversion.php?value=<?php echo $sql; ?>">
			<img src="images/download.png" class="img img-circle"><br><br>
			Download <b>total students</b> details</a></center>
			</div>
			<div class="col-sm-2"><center>
			<a  href="excelconversion.php?value=<?php echo $sql1; ?>">
			<img src="images/download.png" class="img img-circle"><br><br>
			Download <b>RIASEC Scores</b> of all students</a></center>
			</div>

			<div class="col-sm-2"><center>
			<a  href="excelconversion.php?value=<?php echo $sql2; ?>">
			<img src="images/download.png" class="img img-circle"><br><br>
			Download <b>TAT Scores</b> of all students</a></center>
			</div>

			<div class="col-sm-2"><center>
			<a  href="excelconversion.php?value=<?php echo $sql3; ?>">
			<img src="images/download.png" class="img img-circle"><br><br>
			<b>Average Assessment Scores</b> of all students</a></center>
			</div>

			<div class="col-sm-2"><center>
			<a  href="excelconversion.php?value=<?php echo $sql4; ?>">
			<img src="images/download.png" class="img img-circle"><br><br>
			<b>Average CRT Scores</b> of all students</a></center>
			</div>
			<div class="col-sm-2"><center>
			<a  href="excelconversion.php?value=<?php echo $sql5; ?>">
			<img src="images/download.png" class="img img-circle"><br><br>
			<b>Self Discovery Details</b> of all students</a></center>
			</div>

			</div>
			<div class="col-sm-12 well">
                               <center>
                                <form class="form-inline" action="studentbatchdetails.php" method="POST">
                                    <label>Batch Name</label>
                                     <select name='batch' id="batch" class="form-control" required>
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
                                       &nbsp&nbsp
                                        <input type="submit"  name="submit"  class="btn btn-primary" value="download">
                                       </form>
                                </center>
                            </div>
		</div>
		
		
	</body>