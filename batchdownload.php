<html>
<body>
<?php
$batch=$_POST['batch'];
$sql="select s.regno,s.name,s.lastname,s.age,s.mobile,s.gender,s.email,s.branch,s.year,s.section,s.sscper,s.interper,s.eamcetrank,m.f1 1_1,m.f2 1_2,m.s1 2_1,m.s2 2_2,m.t1 3_1,m.t2 3_2,m.fo1 4_1,m.fo2 4_2,m.fb+m.sb+m.tb totalbacklogs,r.s1 riasec_code1,r.s2 riasec_code2,r.s3 riasec_code3 from sdata s,marks m,att a,riasec r where ((s.regno=m.regno and s.regno=a.regno) and s.regno=r.regno) and s.batch='$batch' order by s.branch asc";

echo $sql;


?>

	<a  href="excelconversion.php?value=<?php echo $sql; ?>">
			<br><br>
			<b>Average Assessment Scores</b> of all students</a>
</body>
</html>