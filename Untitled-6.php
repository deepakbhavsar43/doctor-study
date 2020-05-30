<?php
session_start();
include("conn.php");

$date=date("y/m/d");
$uid=$_SESSION['uid'];
$que=$_POST['que'];
$q=mysql_query("insert into question(uid,date,que)values('$uid','$date','$que')");
header("location:quans.php"
?>