<?php
include("conn.php");
session_start();
$cap=$_SESSION['cap'];
$capt=$_POST['capt'];
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$un=$_POST['un'];
$pwd=$_POST['pwd'];
$cont=$_POST['cn'];
$em=$_POST['em'];
$gn=$_POST['gender'];

if($cap === $capt){
$q="insert into master(fname,lname,password,username,email,gender,contactno)values('$fn','$ln','$pwd','$un','$em','$gn','$cont')";
mysql_query($q);
header("location:registration.php?msg=registration complelate");
echo $q;}
else{
echo "plz enter valid captcha";
}
?>