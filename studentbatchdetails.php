<html>
<body>
<div class="container">
<?php
include('adminheader.php');
$batch=$_POST['batch'];

$sql="select s.regno,s.name,s.lastname,s.age,s.mobile,s.gender,s.email,s.branch,s.year,s.section,s.sscper,s.interper,s.eamcetrank,s.batch,s.sscname,s.fname FatherName,s.aincome AnnualIncome,s.fmobile,s.mname MotherName,s.mmaidenname MotherMaidenName,s.rmobile parentno,s.pcode Pincode,s.dob DateofBirth,s.sscschool,s.sscpassyear,s.intername,s.interpassyear,s.admissiontype,s.gap,s.gapreason,s.caste,s.subcaste,s.reservation,s.religion,s.bgroup BloodGroup,s.ph PhysicallyHandicapped,m.f1 1_1,m.f2 1_2,m.f3 2_1,m.f4 2_2,m.f5 3_1,m.f6 3_2,m.f7 4_1,m.f8 4_2,m.b1 1styearbacklogs_sem1,m.b2 1styearbacklogs_sem2,m.b3 2ndyearbacklogs_sem1,m.b4 2ndyearbacklogs_sem2,m.b5 3rdyearbacklogs_sem1,m.b6 3rdyearbacklogs_sem2,m.b7 4thyearbacklogs_sem1,m.b8 4thyearbacklogs_sem2,r.s1 riasec_code1,r.s2 riasec_code2,r.s3 riasec_code3 from sdata s,marks m,att a,riasec r where ((s.regno=m.regno and s.regno=a.regno) and s.regno=r.regno) and s.batch='$batch' order by s.branch asc";
?>
<br><br><br>
<div class="col-sm-12 well">
<h1 align="center">Data has been generated  <a class="btn btn-primary" href="excelconversion.php?value=<?php echo $sql; ?>">click here</a> to download <a class="btn btn-info" href="studentsdetails.php">back</a></h1>
</div>
</div>
</body>
</html>