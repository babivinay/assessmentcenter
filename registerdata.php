<?php

            session_start();
            if($_SESSION['valid']!='T')
            {
                include('login-check.php');
            }
 $regno=$_SESSION['regno'];
include('dataconnection.php');
$name=$_POST['name'];
$lname=$_POST['last-name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$foccupation=$_POST['foccupation'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$type=$_POST['type'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$sscper=$_POST['sscper'];
$interper=$_POST['interper'];
$rank=$_POST['rank'];
$batch=$_POST['batch'];
$section=$_POST['section'];
$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['mobile']=$mobile;
$_SESSION['year']=substr($year,0,1);
$_SESSION['flag']='1';

$sscname=$_POST['sscname'];
$fname=$_POST['fname'];
$aincome=$_POST['aincome'];
$fmobile=$_POST['fmobile'];
$title=$_POST['title'];
$mname=$_POST['mname'];
$mmaidenname=$_POST['mmaidenname'];
$rmobile=$_POST['rmobile'];
$district=$_POST['district'];
$pcode=$_POST['pcode'];
$nationality=$_POST['nationality'];
$dob=$_POST['dob'];
$aadhar=$_POST['aadhar'];
$caste=$_POST['caste'];
$subcaste=$_POST['subcaste'];
$reservation=$_POST['reservation'];
$sscschool=$_POST['sscschool'];
$sscpassyear=$_POST['sscpassyear'];
$intername=$_POST['intername'];
$interpassyear=$_POST['interpassyear'];
$admissiontype=$_POST['admissiontype'];
$religion=$_POST['religion'];
$bgroup=$_POST['bgroup'];
$ph=$_POST['ph'];


$gap=$_POST['gap'];
if($gap=="yes")
	$gapreason=$_POST['gapreason'];
else
	$gapreason="none";

		      

$sql="update sdata set name='$name',lastname='$lname',foccupation='$foccupation',age='$age',mobile='$mobile',gender='$gender',atype='$type',email='$email',branch='$branch',section='$section',year='$year',sscper='$sscper',interper='$interper',eamcetrank='$rank',flag='1',batch='$batch',sscname='$sscname',fname='$fname',aincome='$aincome',title='$title',mname='$mname',mmaidenname='$mmaidenname',rmobile='$rmobile',district='$district',pcode='$pcode',nationality='$nationality',dob='$dob',aadhar='$aadhar',caste='$caste',subcaste='$subcaste',reservation='$reservation',sscschool='$sscschool',sscpassyear='$sscpassyear',intername='$intername',interpassyear='$interpassyear',admissiontype='$admissiontype',religion='$religion',bgroup='$bgroup',ph='$ph',fmobile='$fmobile',gap='$gap',gapreason='$gapreason'  where regno='$regno'; ";
mysqli_query($con,$sql);
 mysqli_close($con);
header("Location:academic.php");
?>