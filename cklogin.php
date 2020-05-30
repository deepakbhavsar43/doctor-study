<?php
include("conn.php");
 $un=$  _POST['un'];
 $pwd=$_POST['pwd'];
 
 $q=("select *from master where username='$un' and password='$pwd'");
//  $r=mysql_fetch_array($q);
$r=$conn->query($q);
 
//  $no=mysql_num_rows($q);
 echo $no;
if($no>0){
session_start();
$_SESSION['uid']=$r['id'];
$_SESSION['name']=$r['fname'];

header("location:welcome.php");
}
else{
header("cklogin.php?msg='not login'");

}
?>